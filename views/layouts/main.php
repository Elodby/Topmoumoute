<!DOCTYPE html>
<html lang="fr">
  <head>  <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo $app->urlFor('root')?>bootstrap/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<meta charset="utf-8" />
  </head>
  <body>
  	
     <body>
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
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catégories<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Catégorie 1</a></li>
                      <li><a href="#">Catégorie 1</a></li>
                      <li><a href="#">Catégorie 1</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
					<li>
				<?php if (isset($_SESSION)) {	echo 
					"<a href='".$app->urlFor('account')."'>";//.$_SESSION['pseudo'];
                 } else { echo 
					"<a href='".$app->urlFor('connexion')."'>" ;
				} ?>
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
				</ul>
              </div>
            </nav>
	<?php 
            // my view content will be placed here
            echo $yield 
          ?>
  </body>
</html>