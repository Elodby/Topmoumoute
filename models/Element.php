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
       // var_dump($description);
       // die();

        $req->execute(array(
            'title'=>$title[0],
            'description' => $description[0]
        ));
         $element_id[]=$bdd->lastInsertId();

         $req->execute(array(
            'title'=>$title[1],
            'description' => $description[1]
        ));
         $element_id[]=$bdd->lastInsertId();

         $req->execute(array(
            'title'=>$title[2],
            'description' => $description[2]
        ));
         $element_id[]=$bdd->lastInsertId();

         $req->execute(array(
            'title'=>$title[3],
            'description' => $description[3]
        ));
         $element_id[]=$bdd->lastInsertId();

         $req->execute(array(
            'title'=>$title[4],
            'description' => $description[4]
        ));
         $element_id[]=$bdd->lastInsertId();


        return $element_id;
    }

    static function update_element($param){
        global $bdd;
        
        $req = $bdd->prepare('UPDATE elements SET title=:title,description=:description,image_url=:image_url WHERE id=:id');
        $req->execute(array(
        	'title' => $param['title'], 
        	'description' => $param['description'], 
        	'image_url' => $param['image_url'],
        	));
    }
}
?>