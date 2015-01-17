<div class="media">
  <div class="media-body">
  	
  	<div class="page-header">
		  <h1><small><?php  echo "Tops de ".$this->data['user']['pseudo']." :"; ?></small></h1>
	</div>
  	<div class="row">
		<?php foreach ($this->data['tops'] as $top): ?>
		  <div class="col-md-3" >
		   <a href='<?php echo "../tops-".$top['id']?>'>
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
  	
  	
  </div>
</div>
