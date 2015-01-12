<?php
/**
* 
*/
class Top
{

    static function get_all_top(){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.id, tops.title, tops.description, tops.date, tops.category_id, tops.user_id, tops.source_id, el.image_url 
									FROM tops
									LEFT JOIN votes 
									ON tops.id = votes.top_id
									LEFT JOIN elements el
									ON votes.element_id = el.id
									WHERE votes.emplacement = 1");
          // l'execution 
        $requete->execute();
          $tops = $requete->fetchAll();
        
        return $tops;
    }

    static function get_top($id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.title 'to_title', elements.title 'el_title', users.pseudo, elements.description
                                    FROM tops
                                    LEFT JOIN votes ON tops.id = votes.top_id
                                    LEFT JOIN elements ON votes.element_id = elements.id
                                    LEFT JOIN users ON votes.user_id = users.id
                                    WHERE tops.id =:id
                                    ORDER BY votes.emplacement");
          // l'execution 
        $requete->bindParam(':id', $id);
        $requete->execute();
          $top = $requete->fetchAll();
        
        return $top;
    }

    static function add_top($title, $description){
    	global $bdd;

        $req = $bdd->prepare("INSERT INTO tops (title, description) VALUES (:title, :description)");
        $req->execute(array(
            'title'=>$title,
            'description' => $description
        ));
    
        return $bdd->lastInsertId();
    }

}
?>
