
<!DOCTYPE html>
<html lang="fr">
  <head>  <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo $app->urlFor('root')?>bootstrap/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="<?php echo $app->urlFor('root')?>bootstrap/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php echo $app->urlFor('root')?>bootstrap/js/bootstrap.min.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo $app->urlFor('root')?>lightbox/js/lightbox.min.js"></script>
    <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <link href="<?php echo $app->urlFor('root')?>lightbox/css/lightbox.css" rel="stylesheet" />
		<meta charset="utf-8" />
  </head>
  <body>
    <!--
    <style>
     .twitter-share-button{
      margin-top: 5px;
     }
    </style>-->
    <div class="row">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-9 col-md-push-3">
            <nav class="navbar navbar-inverse " role="navigation">
              <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $app->urlFor('root') ?>">Top Moumoute</a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="<?php echo $app->urlFor('tops'); ?>">Tous les tops</a></li>
                    </ul>
                  </li>
                </ul>

                <form method="post" action="<?php echo $app->urlFor('post_search');?>" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" name="mot" class="form-control" placeholder="Rechercher">
                    </div>
                    <button type="submit" class="btn btn-default">Go</button>
                </form>
                
                <ul class="nav navbar-nav navbar-right">

                  <?php  if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) { ?>
                  <li><a href='<?php echo $app->urlFor('account'); ?>'><?php echo $_SESSION['pseudo']; ?><span style='margin-left:10px' class='glyphicon glyphicon-user' aria-hidden='true'></span></a></li>
                   <li><a href='<?php echo $app->urlFor('deconnexion'); ?>'><span class="glyphicon glyphicon-off" aria-hidden='true'></span></a></li><!--<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></button>-->
                   
                   <?php } else { ?>
                   <li><a href='<?php echo $app->urlFor('connexion'); ?>'><span style='margin-left:10px' class='glyphicon glyphicon-user' aria-hidden='true'></span></a></li>
                  <li><a href='<?php echo $app->urlFor('connexion'); ?>'><span class="glyphicon glyphicon-off" aria-hidden='true'></span></a></li>
                  <?php }  ?>

				        </ul>
              </div>
            </nav>
            <?php if ($flash['success']): ?>
                <div class="alert alert-info ">
                  <?php echo $flash['success'] ?>
                </div>
              <?php endif ?>

              <?php if ($flash['error']): ?>
                <div class="alert alert-danger">
                  <?php echo $flash['error'] ?>
                </div>
          <?php endif ?>
	       <?php 
            // my view content will be placed here
            echo $yield 
          ?>
        </div>
        <div class="col-md-3 col-md-pull-9">
          <img width="200px" src="<?php echo $app->urlFor('root')?>/LOGO.png" alt="logo" class="img-rounded">
        </div>
        </div>
        </div>
  </body>
</html>