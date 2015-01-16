<div class="media">
  <div class="media-body">
   
  	<?php 
  	echo $this->data['titre'];
  	echo $this->data['description'];
  	?>
  	
  </div>
</div>

<a href="<?php echo $app->urlFor('root')  ?>">< Back</a>