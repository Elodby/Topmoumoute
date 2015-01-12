<div class="media">
  <div class="media-body">
<?php var_dump($this->data['top'][0]['top_id']); ?>
  	<a name="fb_share" type="box_count" share_url="http://localhost/Topmoumoute/tops-<?php echo $this->data['top'][0]['top_id']; ?>"></a>

    <?php echo "<h2>".$this->data['top'][0]['to_title']."</h2>"; ?>
    <div>
    	<a href="<?php echo "users-".$this->data['top'][0]['user_id']?>">
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
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<!--<a href="<?php //echo $app->urlFor('root')  ?>">< Back</a>-->
