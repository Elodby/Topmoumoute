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
	
	static function updateUser($param){
		global $bdd;
		
		$requete = $bdd->prepare("UPDATE users
								SET mail=:mail,password=:password,first_name=:first_name,last_name=:last_name,avatar_url=:avatar_url
								WHERE id=:id");
		// l'execution 
		$requete->bindParam(':mail', $param['mail']);
		$requete->bindParam(':password', $param['password']);
		$requete->bindParam(':first_name', $param['first_name']);
		$requete->bindParam(':last_name', $param['last_name']);
		$requete->bindParam(':avatar_url', $param['avatar_url']);
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
		return true;
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
			$donnees=$req->fetchAll();  
			$_SESSION['id']=$donnees[0]['id'];
			  return $_SESSION['id'];
			}else{
			  return false;
			}
		  
	}
  }
?>