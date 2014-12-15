<div class="media">
  <div class="media-body">
    <h2>All tops</h2>
<ul>
  <?php foreach ($this->data['tops'] as $top): ?>
    <li>
		<?php echo "<a href='tops-".$top['id']."'>".$top['title']."</a>" ?>
    </li>
  <?php endforeach; ?>
</ul>
  </div>
</div>

<a href="<?php echo $app->urlFor('root')  ?>">< Back</a>