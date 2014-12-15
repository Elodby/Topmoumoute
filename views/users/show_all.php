<h2>Users listing</h2>
<ul>
  <?php foreach ($this->data['users'] as $user): ?>
    <li>
		<?php echo "<a href='users-".$user['id']."'>".$user['pseudo']."</a>" ; ?>
    </li>
  <?php endforeach; ?>
</ul>