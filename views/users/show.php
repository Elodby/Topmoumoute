<div class="media">
  <div class="media-body">
    <h2 class="media-heading"><?php echo $this->data['user']['pseudo'] ?></h2>

    <div>
		<h3><?php echo $this->data['user']['first_name']." " ?><?php echo $this->data['user']['last_name'] ?></h3>
		<?php echo $this->data['user']['mail'] ?>
		</br>
		<img src='<?php echo $this->data['user']['avatar_url'] ?>' style='height:100px' />
    </div>
  </div>
</div>

<a href="<?php echo $app->urlFor('account') ?>">Modifier</a>