<div class="media">
  <div class="media-body">
    <h2>Recherche avancée</h2>

	    <form method="post" action="<?php echo $app->urlFor('post_search');?>" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" name="mot" class="form-control" placeholder="Rechercher top...">
            </div>
            <button type="submit" class="btn btn-default">Rechercher</button>
        </form>

		<?php
		if (isset($this->data['resTop'])){ ?>
			<h2> Resultat des Tops: </h2>
			<?php 
			foreach($this->data['resTop'] as $res) { 
	            $titre=$res['title']; $description=$res['description']; $id=$res['id']; ?>

	            <h3><?php
	            	echo "<a href= 'tops-".$id."'>".$titre."</a>"; ?></h3>
	            <p> <?php echo $description; ?> </p>
	                
	        <?php
	            $resultat="";
	            $titre="";
	            $req="";
	        }
        } 
        if (isset($this->data['resUser'])){ ?>
        	<h2> Resultat des Auteurs: </h2>
			<?php 
			foreach($this->data['resUser'] as $res) { 
	            $pseudo=$res['pseudo']; $id=$res['id']; ?>

	            <h4><?php
	            	echo "<a href= 'users-".$id."'>".$pseudo."</a>"; ?></h4>
	                
	        <?php
	            $resultat="";
	            $titre="";
	            $req="";
	        }
        }
		 ?>

  </div>
</div>
