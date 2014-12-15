<?php
session_start();
//$_SESSION['id']=1;
  // require composer autoload (load all my libraries)
  require 'vendor/autoload.php';
  
  // require my models
  require 'models/connexion_bdd.php';
  require 'models/User.php';
  require 'models/Category.php';
  require 'models/Element.php';
  require 'models/Top.php';
  require 'models/Vote.php';
  //require 'models/inscription.php';

  // Slim initialisation
  $app = new \Slim\Slim(array(
    'view' => '\Slim\LayoutView', // I activate slim layout component
    'layout' => 'layouts/main.php' // I define my main layout
  ));

  // hook before.router, now $app is accessible in my views
  $app->hook('slim.before.router', function () use ($app) {
    $app->view()->setData('app', $app);
  });

  // views initiatilisation
  $view = $app->view();
  $view->setTemplatesDirectory('views');

  // GET /
  $app->get('/', function() use ($app) {
    $tops = Top::get_all_top();
    $app->render( 
      'tops/show_all.php', 
      array("tops" => $tops
      ) 
    );
  })->name('root'); // named route so I can use with "urlFor" method

  //POST /root connexion
  $app->post('/', function() use ($app) {
    $_SESSION['id']=User::connexion($_POST['pseudo'],$_POST['password']);
	$tops = Top::get_all_top();
    $app->render(
      'tops/show_all.php',
		array("tops" => $tops) 
    );
  })->name('root_connexion');
 

///USERS////
 
  // GET /users-:user_id
	$app->get('/users-:user_id', function ($id) use ($app) {
    $user = User::getUser($id);
    $app->render(
      'users/show.php', 
      array("user" => $user)
    );
  })->name('user');
  
	//POST /users-:user_id
	$app->post('/users-me', function () use ($app) {
	// Si le formulaire est rempli
	if(isset($_POST['mail']) AND $_POST['mail']!="" AND isset($_POST['password']) AND $_POST['password']!="" AND $_POST['password']==$_POST['password2']) 
		User::updateUser($_POST);
    $user = User::getUser($_POST['id']);
    $app->render(
      'users/show.php', 
      array("user" => $user)
    );
  })->name('user_update');
	
	
    // GET /users
  $app->get('/users', function() use ($app) {
    $users = User::all();
    $app->render( 
      'users/show_all.php', 
      array("users" => $users) 
    );
  })->name('users');
  
  //GET /account
  $app->get('/account', function () use ($app) {
    $user = User::getUser($_SESSION['id']);
    $app->render(
      'users/profil.php',
	   array("user" => $user)
    );
  })->name('account');
  
  //post /account
  $app->post('/account', function () use ($app) {
	User::inscription($_POST['pseudo'],$_POST['password'],$_POST['password2'],$_POST['mail']); 
    $app->response->redirect($app->urlFor('user'),303);
  })->name('account_create');

  //GET /connexion
  $app->get('/connexion', function () use ($app) {
    $app->render(
      'users/connexion.php' 
    );
  });  
  
   //GET /inscription
  $app->get('/inscription', function () use ($app) {
    $app->render(
      'users/inscription.php' 
    );
  });





  
 ////TOPS////
 
   //GET /tops
  $app->get('/tops', function () use ($app) {
    $tops = Top::get_all_top();
    $app->render(
      'tops/show_all.php',  
      array("tops" => $tops) 
    );
  })->name('tops');


  //GET /tops/:top_id
  $app->get('/tops/:top_id', function ($id) use ($app) {
    $top = Top::get_top($id);
    $app->render(
      'tops/one_top.php',
      array("top" => $top)
    );
  });



     //GET /top-add
  $app->get('/top-add', function () use ($app) {
    $app->render(
      'tops/top_creation.php'
    );
  });

   //POST /top-add-element
  $app->post('/top-add-elements', function () use ($app) {
    $top_id = Top::add_top($_POST['title'], $_POST['description']);
    $category = Category::get_all_category();
    $app->render(
      'tops/element_creation.php',
      array("top_id" => $top_id, "category" => $category)
    );
  })->name('creation_elements');
  

    //POST/top-creat
  $app->post('/top-creat', function () use ($app) {
    $element_id[] = Element::add_element($_POST['title'], $_POST['description'] );
    $vote = Vote::add_vote( $_POST['emplacement'],  $element_id, $_POST['top_id'] );
    $top = Top::get_top($_POST['top_id'] );

    $app->render(
      'tops/top_creat.php',
      array("element_id" => $element_id, "vote"=>$vote, "top"=>$top)
    );
  })->name('top_creat');
     


   //GET /tops/search
  $app->get('/tops/search', function () use ($app) {
    $app->render(
      'tops/search.php' 
    );
  });
  
  
  // always need to be at the bottom of this file !
  $app->run();