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

    if(isset($element_id))
      return $element_id;
  }
  static function upload_image($element_id){
      $target_dir = "./uploadedfiles/";
      $i=0;
      while($_FILES["image"]['name'][$i]!="")
      {
          $target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          // Check if image file is a actual image or fake image
          if(isset($_POST["image"])) {
              $check = getimagesize($_FILES["image"]["tmp_name"][$i]);
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
          if ($_FILES["image"]["size"][$i] > 5000000) {
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
              if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
                  //echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";

              } else {
                  //echo "Sorry, there was an error uploading your file.";
              }
          }
              $file = basename( $_FILES["image"]["name"][$i]);
              if($file!=null){
              global $bdd;

              $requete = $bdd->prepare("UPDATE elements SET image_url=:image_url WHERE id=:element_id");
                // l'execution 
              $requete->bindParam(':element_id', $element_id[0][$i]);
              $requete->bindParam(':image_url', $file);

              $requete->execute();
              //echo "OK BDD"; 
              }
        $i++;
      }
    }
}
?>