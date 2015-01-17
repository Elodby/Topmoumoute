<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<div class="row">
			  <div class="col-md-4"></div>
			  <div style="text-align:center;" class="col-md-4"><a href="<?php if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) echo $app->urlFor('top-add'); else echo $app->urlFor('connexion');  ?>"><button class="btn btn-danger"><h4>Créer mon top !<h4/></button></a></div>
			  <div class="col-md-4"></div>
			</div>
		  <h1><small>Les meilleurs tops :</small></h1>
		</div>
		<div class="row">
		<?php foreach ($this->data['tops'] as $top): ?>
		  <div class="col-md-3" >
		   <a href='<?php echo "tops-".$top['id']?>'>
			<div class="thumbnail">
			  <img src="<?php echo './uploadedfiles/'.$top['image_url'];?>" width="300px" alt="">
			  <div class="caption">
				<h3><?php echo $top['title'] ?></h3>
				<p><?php echo $top['description'] ?></p>
				<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
			  </div>
			</div>
			</a>
		  </div>
			<?php endforeach; ?>

		<div class="row">
		  <div class="col-md-12">
			<div class="page-header">
			  <h1><small>Les derniers tops :</small></h1>
			</div>
			<div class="row">
			<?php foreach ($this->data['last_tops'] as $top): ?>
		  <div class="col-md-3">
		   <a href='<?php echo "tops-".$top['id']?>'>
			<div class="thumbnail">
			  <img src="<?php echo './uploadedfiles/'.$top['image_url'];?>" width="300px" alt="">
			  <div class="caption">
				<h3><?php echo $top['title'] ?></h3>
				<p><?php echo $top['description'] ?></p>
				<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
			  </div>
			</div>
			</a>
		  </div>
			<?php endforeach; ?>
			</div>
			  
		<?php if(isset($_SESSION['id']) and $_SESSION['id'] != null){ ?>
			 <div class="row">
			  <div class="col-md-12">
				<div class="page-header">
				  <h1><small>Les tops que vous suivez :</small></h1>
				</div>
				<div class="row">
				  <?php foreach ($this->data['top_user_follow'] as $top): ?>
			  <div class="col-md-3">
			   <a href='<?php echo "tops-".$top['id']?>'>
				<div class="thumbnail">
				  <img src="<?php echo './uploadedfiles/'.$top['image_url'];?>" width="300px" alt="">
				  <div class="caption">
					<h3><?php echo $top['title'] ?></h3>
					<p><?php echo $top['description'] ?></p>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
				</a>
			  </div>
				<?php endforeach; ?>
				</div>
			  </div>
			</div>
		<?php } ?>
		
	  </div>
	  <div class="col-md-3 col-md-pull-9">
		<img width="250px" src="pictures/logo_mouton.png" alt="#" class="img-rounded">
	  </div>
	</div>
  </div>
</div>