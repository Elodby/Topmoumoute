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
		  <div class="col-md-3">
		   <a href='<?php echo "tops-".$top['id']?>'>
			<div class="thumbnail">
			  <img src="<?php echo $top['image_url'] ?>" width="300px" alt="">
			  <div class="caption">
				<h3><?php echo $top['title'] ?></h3>
				<p><?php echo $top['description'] ?></p>
				<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
			  </div>
			</div>
			</a>
		  </div>
			<?php endforeach; ?>
			  <!-- <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/noel.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Votre top idées cadeaux :</h3>
					<p>Des bonnes idées ? Partagez !</p>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			   <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/plage.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Vos lieux préférés :</h3>
					<p>Les endroits qui vous font rêver.</p>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			   <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/film.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Vos films favoris :</h3>
					<p>Incontournable.</p>
				  </br>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			</div>
		  </div>
		</div>-->

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
			  <img src="<?php echo $top['image_url'] ?>" width="300px" alt="">
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
			  

		 <div class="row">
		  <div class="col-md-12">
			<div class="page-header">
			  <h1><small>Les tops que vous suivez :</small></h1>
			</div>
			<div class="row">
			  <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/yop.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Vos yops favoris :</h3>
					<p>Eh c'est MON Yop .</p>
				  </br>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			   <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/parfum.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Votre top Parfum : </h3>
					<p>Pour sentir bon !</p>
				  </br>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			   <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/animaux.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Vos animaux préférés :</h3>
					<p>On en voudrait tous un ..</p>
				  </br>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			   <div class="col-md-3">
				<div class="thumbnail">
				  <img src="pictures/cute.jpg" width="300px" alt="">
				  <div class="caption">
					<h3>Votre top trucs mignons :</h3>
					<p>Cuttest <3 </p>
				  </br>
					<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
				  </div>
				</div>
			  </div>

			</div>
		  </div>
		</div>
	  </div>
	  <div class="col-md-3 col-md-pull-9">
		<img width="250px" src="pictures/logo_mouton.png" alt="#" class="img-rounded">
	  </div>
	</div>
  </div>
</div>