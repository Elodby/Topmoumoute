<?php
  class User {
    
	static function all() {
      // "SELECT * from users" SQL request
		global $bdd;

		$requete = $bdd->prepare("SELECT * FROM users");
		// l'execution 
		$requete->execute();
		$users = $requete->fetchAll();

		return $users;
    }

    static function getUser($id) {
      // "SELECT * from users WHERE ID = $user_id" SQL request
		global $bdd;
	
		$requete = $bdd->prepare("SELECT * FROM users WHERE id=:id");
		// l'execution 
		$requete->bindParam(':id', $id);
		$requete->execute();
		$user = $requete->fetch();
		
		return $user;
    }

    static function getCurrentUser($id) {
      // "SELECT * from users WHERE ID = $user_id" SQL request
		global $bdd;

		$requete = $bdd->prepare('SELECT * FROM users WHERE id=:id'); 
			// l'execution 
		$requete->bindParam(':id', $id);
		$requete->execute();

		$user = $requete->fetch(); 
			$_SESSION['id']=$user['id'];
			$_SESSION['pseudo']=$user['pseudo'];
			$_SESSION['mail']=$user['mail'];

		return $user;
    }
	
	static function updateUser($param){
		global $bdd;

		$requete = $bdd->prepare("UPDATE users
								SET mail=:mail,password=:password,first_name=:first_name,last_name=:last_name
								WHERE id=:id");
		// l'execution 
		$requete->bindParam(':mail', $param['mail']);
		$requete->bindParam(':password', $param['password']);
		$requete->bindParam(':first_name', $param['first_name']);
		$requete->bindParam(':last_name', $param['last_name']);
		$requete->bindParam(':id', $param['id']);
		$requete->execute();

	}
	
	static function inscription($pseudo,$password,$password2,$mail){
		global $bdd;
	
		if(isset($pseudo) AND $pseudo!="" AND isset($password) AND $password!="" AND $password==$password2 
		AND isset($mail) AND $mail!="") 
		{
		 // On fait l'insertion en base de données
		$req = $bdd->prepare('INSERT INTO users (pseudo,password,mail) Values (:pseudo,:password,:mail)'); 
		//on passe en paramètre de la requete nos variables $_POST
		$reponse = $req->execute(array(
		  'pseudo' => strtolower($pseudo),
		  'password' => $password,
		  'mail' => strtolower($mail)
		  ));
		//Récupération de l'id qui vient juste d'être insérée
		$_SESSION['id'] = $bdd->lastInsertId();

		return $bdd->lastInsertId();
		}
	}
	
	static function connexion($pseudo, $password){
		global $bdd;
		
		//on passe par le formulaire
		if(isset($pseudo) AND $pseudo!="" AND isset($password) AND $password!="") // On a le pseudo et mdp
		  {
			// On récupère tout le contenu de la table 
			$req = $bdd->prepare('SELECT * FROM users WHERE pseudo=:pseudo AND password=:password'); 
			//on passe en paramètre de la requete nos variables $_POST
			$req->execute(array(
			  'pseudo' => $pseudo,
			  'password' => $password
			  ));
			if($donnees=$req->fetchAll()){  
			$_SESSION['id']=$donnees[0]['id'];
			$_SESSION['pseudo']=$donnees[0]['pseudo'];
			$_SESSION['mail']=$donnees[0]['mail'];
			$_SESSION['avatar_url']=$donnees[0]['avatar_url'];
			$_SESSION['follower_nbr']=$donnees[0]['follower_nbr'];
			return $_SESSION['id'];
			}
			else return false;
			  
			}else{
			  return false;
			}
		  
	}

	static function search($mot){
        global $bdd;

        if(isset($mot) && $mot != "") // on vérifie d'abord l'existence du POST.
        {
            $req = $bdd->prepare("SELECT * FROM users WHERE pseudo LIKE '%$mot%'");
            $req->execute();
            $resultat = $req->fetchAll();

            return $resultat;
         }
    }

    static function follow($user_id, $follower_id){
        global $bdd;
        
        $requete = $bdd->prepare("INSERT INTO followers (user_id,follower_id) VALUES(:user_id,:follower_id)");
          // l'execution 
        $requete->bindParam(':user_id', $user_id);
        $requete->bindParam(':follower_id', $follower_id);

        $requete->execute();
    }

    static function get_followers($id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT COUNT(follower_id) AS nbr FROM followers WHERE user_id=:id");
          // l'execution 
        $requete->bindParam(':id', $id);
        $requete->execute();
          $followers = $requete->fetch();
        
        return $followers;
    }

    static function count_top($id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT COUNT(user_id) AS nbr FROM tops WHERE user_id=:id");
          // l'execution 
        $requete->bindParam(':id', $id);
        $requete->execute();
          $topsNbr = $requete->fetch();
        
        return $topsNbr;
    }

    static function upload_image(){
    	$target_dir = "./uploadedfiles/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["avatar"])) {
		    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["avatar"]["size"] > 5000000) {
		    //echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";

		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}
        $file = basename( $_FILES["avatar"]["name"]);
        if($file!=null){
        global $bdd;

        $requete = $bdd->prepare("UPDATE users SET avatar_url=:avatar_url WHERE id=:user_id");
          // l'execution 
        $requete->bindParam(':user_id', $_SESSION['id']);
        $requete->bindParam(':avatar_url', $file);

        $requete->execute();
        //echo "OK BDD"; 
        }
    }
  }
?>