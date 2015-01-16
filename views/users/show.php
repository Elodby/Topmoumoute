<div class="media">
  <div class="media-body">
    <h2 class="media-heading"><?php echo $this->data['user']['pseudo'] ?></h2>
<?php var_dump($this->data['user'])
//or die();?>
<input type="hidden" name="user_id", value="<?php echo $this->data['user_id']?>"/>


    <div>
		<h3><?php echo $this->data['user']['first_name']." " ?><?php echo $this->data['user']['last_name'] ?></h3>
		<?php echo $this->data['user']['mail'] ?>
		</br>
		<img src='<?php echo $this->data['user']['avatar_url'] ?>' style='height:100px' />
    </div>

    <!-- <a href="users-<?php // $this->data['user']['id'] ?>/tops"><button class="btn btn-primary">Voir mes tops</button></a> -->
  </div>
</div>

<a href="<?php echo $app->urlFor('update_account') ?>"><button class="btn btn-primary">Mettre à jour mon profil</button></a>