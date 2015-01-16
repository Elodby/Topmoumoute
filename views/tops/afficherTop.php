<?php if(isset($_SESSION['id'])) $add_like=Top::like($this->data['top'][0]['top_id'], $_SESSION['id']); ?>
<div class="col-md-7">
  <h1><small><?php echo $this->data['top'][0]['to_title']." :"; ?></small></h1>
  <h2><small><?php echo $this->data['top'][0]['to_description'] ;?></small></h2>
  <h3><small>Soumis par <a href="<?php echo "users-".$this->data['top'][0]['user_id']?>"><?php echo $this->data['top'][0]['pseudo'] ;?></a></small></h3>
  <h4><small><?php echo $this->data['top'][0]['date'] ;?></small></h4>
</div>
<div class="col-md-5">
    <div class="row">
       <div class="col-md-6">
        <a class="fb_share"  name="fb_share" type="button_count" share_url="http://localhost/Topmoumoute/tops-<?php echo $this->data['top'][0]['top_id']; ?>" style="margin-bottom:5px"></a>
        </div>
        <div class="col-md-6">
        <a href="https://twitter.com/share" style="margin-top:5px;" class="twitter-share-button">Tweet</a>
        </div>
    </div>
</div>
<!---->
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-2">
    <div class="list-group" style="margin-top:15px;">
      <a href="#" class="list-group-item list-group-item-info"><?php echo $this->data['likes']['nbr']." likes" ;?></a>
      <a href="#" class="list-group-item list-group-item-danger"><?php echo $this->data['followers']['nbr']." followers" ;?></a>
    </div>
</div>
<div class="row">
  <div class="col-md-7">
    <div class="thumbnail">
      <img src="pictures/elsa.png" width="470px" alt="">
      <div class="caption">
        <h3><?php echo $this->data['top'][0]['el_title'] ;?></h3>
        <p><?php echo $this->data['top'][0]['description'] ;?></p>
      </div>
    </div>
  </div>

  <div class="col-md-5">
  <?php foreach ($this->data['top'] as $elements => $value) { if($elements!=0) {?>
    <div class="row">
      <div class="thumbnail">
      <ul class="media-list">
        <li class="media">
          <a class="media-left" href="#">
            <img src="pictures/elsa.png" width="90px">
          </a>
          <div class="media-body">
            <h4 class="media-heading"><?php echo $value['el_title']; ?></h4>
            <?php echo $value['description']; ?>
          </div>
        </li>
      </ul>
    </div>
    </div>
    <?php }} if(isset($_SESSION['id'])) {?>

        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-warning" type="submit">Toper</button>
          </div>
          <div class="col-md-4">
            <a href="<?php echo $add_like ?>"><button id="liker" class="btn btn-danger" type="submit">Liker</button></a>
          </div>
          <div class="col-md-4">
            <button class="btn btn-info" type="submit">Suivre</button>
          </div>
        </div>
        <?php } else {?>

        <div class="row">
          <div class="col-md-4">
            <a href="<?php echo $app->urlFor('connexion'); ?>"><button class="btn btn-warning" type="submit">Toper</button></a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo $app->urlFor('connexion'); ?>"><button id="liker" class="btn btn-danger" type="submit">Liker</button></a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo $app->urlFor('connexion'); ?>"><button class="btn btn-info" type="submit">Suivre</button></a>
          </div>
        </div>
        <?php } ?>
  </div>
</div>