<div class="media">
  <div class="media-body">
    <?php 
			
			echo "<h2>". $this->data['top'][0]['to_title'] ."</h2>"; ?>
    <div>
    	<!--<a href="<?php //"../users/".$user['id']?>">-->

		<a href="<?php echo $app->urlFor('user') ?>">
			<?php echo "<h5><i>". $this->data['top'][0]['pseudo'] ."</i><h5>";?>
		</a>
			<ul>
				<?php foreach ($this->data['top'] as $elements => $value) { 
					echo "<li><h3>". $value['el_title'] ."</h3>";
					echo "<p>". $value['description'] ."</p></li>";
				} ?>
			</ul>
    </div>
  </div>
</div>

<!--<a href="<?php //echo $app->urlFor('root')  ?>">< Back</a>-->
