<style>
 .twitter-share-button{
 	margin-top: 5px;
 }
</style>

<div class="media">
  <div class="media-body">
<?php //var_dump($this->data['top'][0]['top_id']); ?>

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
</br>
    <a name="fb_share" type="button_count" share_url="http://localhost/Topmoumoute/tops-<?php echo $this->data['top'][0]['top_id']; ?>" style="margin-bottom:5px"></a>
  	</br><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>

  </div>
</div>
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
