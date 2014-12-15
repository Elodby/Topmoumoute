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

    static function get_elemtent($id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM elements WHERE id=:id");
          // l'execution 
        $requete->bindParam(':id', $id);
        $requete->execute();
          $element = $requete->fetch();
        
        return $element;
    }

    static function add_element($param){
    	global $bdd;
    	
    	$req = $bdd->prepare("INSERT INTO elements (title,description,image_url) VALUES (? , ? , ?)");
    	$req->execute(array($param[''],$param[''],$param['']));
        
        return $bdd->lastInsertId();
    }

    static function add_elements($title, $description){
        global $bdd;

        $req = $bdd->prepare("INSERT INTO tops (title, description) VALUES (:title, :description)");
        $req->execute(array(
            'title'=>$title,
            'description' => $description
        ));
    
        return $bdd->lastInsertId();
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