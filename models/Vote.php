<?php

/**
* 
*/
class Vote
{
	
	

	static function add_vote($emplacement, $element_id, $top_id){
    	global $bdd;

        $req = $bdd->prepare("INSERT INTO votes (emplacement, user_id, element_id, top_id) VALUES (:emplacement, 1, :element_id, :top_id)");
        $req->execute(array(
            'emplacement'=>$emplacement,
            'element_id'=>$element_id,
            'top_id'=> $top_id
            ));
    
        return $bdd->lastInsertId();
    }


}

?>