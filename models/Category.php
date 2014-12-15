<?php
/**
* 
*/
class Category
{
	
	static function get_all_category(){
		global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM categories");
          // l'execution 
        $requete->execute();
          $categories = $requete->fetchAll();
        
        return $categories;
	}
}
?>