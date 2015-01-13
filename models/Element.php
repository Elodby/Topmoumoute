 <?php
/**
* 
*/
class Element
{

  static function get_all_element(){
    global $bdd;
    
    $requete = $bdd->prepare("SELECT * FROM elements");
      // l'execution 
    $requete->execute();
      $elements = $requete->fetchAll();
    
    return $elements;
  }

  static function get_element($id){
    global $bdd;
    
    $requete = $bdd->prepare("SELECT * FROM elements WHERE id=:id");
      // l'execution 
    $requete->bindParam(':id', $id);
    $requete->execute();
      $element = $requete->fetch();
    
    return $element;
  }

  static function add_element($title, $description){
    global $bdd;

    $req = $bdd->prepare("  INSERT INTO elements (title, description) VALUES (:title, :description)");


    if ($title[0] != ""){
      $req->execute(array(
        'title'=>$title[0],
        'description' => $description[0]
      ));
     $element_id[]=$bdd->lastInsertId();
    }
   
    if ($title[1] != ""){
      $req->execute(array(
        'title'=>$title[1],
        'description' => $description[1]
      ));
      $element_id[]=$bdd->lastInsertId();
    }
     
    if ($title[2] != ""){
      $req->execute(array(
        'title'=>$title[2],
        'description' => $description[2]
      ));
      $element_id[]=$bdd->lastInsertId();
    }
     

    if ($title[3] != ""){
      $req->execute(array(
        'title'=>$title[3],
        'description' => $description[3]
      ));
      $element_id[]=$bdd->lastInsertId();
    }

    if ($title[4] != ""){
      $req->execute(array(
        'title'=>$title[4],
        'description' => $description[4]
      ));
      $element_id[]=$bdd->lastInsertId();
    }

    return $element_id;
  }
/*
  static function upload_img($top_id, $element_id){

    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $extension_upload = strtolower( substr( strrchr($_FILES['icone']['name'], '.')  ,1)  );
    
    if ( in_array($extension_upload,$extensions_valides) ) {
      echo "Extension correcte";


      $nom = "img".$top_id.$element_id."."$extension_upload;
      $resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
      if ($resultat) {
          echo "Transfert réussi";

          $image_url = "images/".$nom;
          return $image_url;
      }
    }
  }
*/
}
?>