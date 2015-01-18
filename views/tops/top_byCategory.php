<div class="media">
  <div class="media-body">

    <div class="page-header">
		<h1><small>Top par categories :</small></h1>
	</div>
	
	<h3><small>Trier par:</small></h3>
	 <ul>
	    <div class="row">
			<?php foreach ($this->data['categories'] as $category): ?>
			  <div class="col-md-3" >
				<li><a href="category-<?php echo $category['cat_id'] ?>"> <?php echo $category['cat_title'] ?> </a></li>
			  </div>
			<?php endforeach; ?>
		</div>
  	</ul>
  	<br><br>

	<div class="row">
		<?php foreach ($this->data['tops'] as $top): ?>
		  <div class="col-md-4" >
		   <a href='<?php echo "../tops-".$top['id']?>'>
			<div class="thumbnail">
			  <img src="<?php echo '../uploadedfiles/'.$top['image_url'] ?>" width="300px" alt="">
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
