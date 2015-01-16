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
        //$requete = $bdd->prepare("SELECT tops.title 'to_title', elements.title 'el_title', users.pseudo, elements.description

        $requete = $bdd->prepare("SELECT tops.id 'top_id', tops.title 'to_title', tops.description 'to_description', tops.date, elements.title 'el_title', users.pseudo, users.id 'user_id', elements.description
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



    static function get_top_byUser($user_id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.id, tops.title, tops.description, tops.user_id, el.image_url, users.pseudo
                                    FROM tops
                                    LEFT JOIN votes ON tops.id = votes.top_id
                                    LEFT JOIN elements el ON votes.element_id = el.id
                                    LEFT JOIN users ON tops.user_id = users.id
                                    WHERE tops.user_id = :user_id
                                    AND votes.emplacement = 1
                                    ORDER BY tops.id");
          // l'execution 
        $requete->bindParam(':user_id', $user_id);
        $requete->execute();
          $tops = $requete->fetchAll();
        
        return $tops;
    }

    static function get_top_byCategory($cat_id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.id, tops.title, tops.description, el.image_url, tops.category_id
                                    FROM tops
                                    LEFT JOIN votes ON tops.id = votes.top_id
                                    LEFT JOIN elements el ON votes.element_id = el.id
                                    WHERE tops.category_id = :cat_id
                                    AND votes.emplacement = 1
                                    ORDER BY tops.id");
          // l'execution 
        $requete->bindParam(':cat_id', $cat_id);
        $requete->execute();
          $tops = $requete->fetchAll();
        
        return $tops;
    }


    static function add_top($title, $description, $category_id, $user_id){
    	global $bdd;
        
        $req = $bdd->prepare("INSERT INTO tops (title, description, date, category_id, user_id) VALUES (:title, :description, CURDATE(), :category_id, :user_id)");
        

        $req->execute(array(
            'title'=>$title,
            'description' => $description,
            'category_id'=>$category_id,
            'user_id' => $user_id
        ));
    
        return $bdd->lastInsertId();
    }
	
	static function get_last_tops(){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.id, tops.title, tops.description, tops.date, tops.category_id, tops.user_id, tops.source_id, el.image_url 
									FROM tops
									LEFT JOIN votes 
									ON tops.id = votes.top_id
									LEFT JOIN elements el
									ON votes.element_id = el.id
									WHERE votes.emplacement = 1
									ORDER BY tops.date DESC
									LIMIT 4");
          // l'execution 
        $requete->execute();
          $tops = $requete->fetchAll();
        
        return $tops;
    }
	
	static function get_best_tops(){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.id, tops.title, tops.description, el.image_url, COUNT(DISTINCT likes.user_id) 'nbLike'
                                    FROM likes
                                    LEFT JOIN tops ON tops.id = top_id
                                    LEFT JOIN votes  ON tops.id = votes.top_id
                                    LEFT JOIN elements el ON votes.element_id = el.id
                                    WHERE votes.emplacement = 1
                                    GROUP BY likes.top_id 
                                    ORDER BY nbLike DESC
									LIMIT 4");
          // l'execution 
        $requete->execute();
        $tops = $requete->fetchAll();
        
        return $tops;
    }

    static function get_tops_follows($user_id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT tops.id, tops.title, tops.description, el.image_url
                                    FROM tops
                                    LEFT JOIN votes  ON tops.id = votes.top_id
                                    LEFT JOIN elements el ON votes.element_id = el.id
                                    LEFT JOIN followers ON tops.user_id = followers.user_id
                                    WHERE votes.emplacement = 1
                                    AND follower_id = :user_id
                                    ORDER BY tops.date
                                    LIMIT 4");
          // l'execution 
        $requete->bindParam(':user_id', $user_id);
        $requete->execute();
          $tops = $requete->fetchAll();
        
        return $tops;
    }


    static function get_likes($id){
        global $bdd;
        
        $requete = $bdd->prepare("SELECT COUNT(DISTINCT user_id) AS nbr FROM likes WHERE top_id=:id");
          // l'execution 
        $requete->bindParam(':id', $id);
        $requete->execute();
          $likes = $requete->fetch();
        
        return $likes;
    }

    static function like($top_id, $user_id){
        global $bdd;
        
        $requete = $bdd->prepare("INSERT INTO likes (user_id,top_id) VALUES(:user_id,:top_id)");
          // l'execution 
        $requete->bindParam(':user_id', $user_id);
        $requete->bindParam(':top_id', $top_id);

        $requete->execute();
    }

    static function check_like($top_id, $user_id){
        //vérifier si l'utilisateur connecté a déjà liker ce top
    }


    static function search($mot){
        global $bdd;

        if(isset($mot) && $mot != "") // on vérifie d'abord l'existence du POST.
        {
            

            $req = $bdd->prepare("SELECT * FROM tops WHERE title LIKE '%$mot%' OR description LIKE '%$mot%'");
            $req->execute();
            $resultat = $req->fetchAll();

            return $resultat;
         }
    }
}
?>
