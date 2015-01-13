<?php

/**
* 
*/
class Vote
{
	static function add_vote($emplacement, $user_id, $element_id, $top_id){
    	global $bdd;

        $req = $bdd->prepare("  INSERT INTO votes (emplacement, user_id, element_id, top_id) VALUES (:emplacement, :user_id, :element_id, :top_id)");
       
        if (isset($element_id[0][0])){
            $req->execute(array(
                'emplacement'=>$emplacement[0],
                'element_id'=>$element_id[0][0],
                'top_id'=> $top_id,
                'user_id' => $user_id
                ));
            $vote_id[]=$bdd->lastInsertId();
        }

        if (isset($element_id[0][1])){
            $req->execute(array(
                'emplacement'=>$emplacement[1],
                'element_id'=>$element_id[0][1],
                'top_id'=> $top_id,
                'user_id' => $user_id
                ));
            $vote_id[]=$bdd->lastInsertId();
        }

        if (isset($element_id[0][2])){
            $req->execute(array(
                'emplacement'=>$emplacement[2],
                'element_id'=>$element_id[0][2],
                'top_id'=> $top_id,
                'user_id' => $user_id
                ));
            $element_id[]=$bdd->lastInsertId();
        }

        if (isset($element_id[0][3])){
            $req->execute(array(
                'emplacement'=>$emplacement[3],
                'element_id'=>$element_id[0][3],
                'top_id'=> $top_id,
                'user_id' => $user_id
                ));
            $vote_id[]=$bdd->lastInsertId();
        }

        if (isset($element_id[0][4])){
            $req->execute(array(
                'emplacement'=>$emplacement[4],
                'element_id'=>$element_id[0][4],
                'top_id'=> $top_id,
                'user_id' => $user_id
                ));
            $vote_id[]=$bdd->lastInsertId();
        }

    
        return $vote_id;
    }


}

?>