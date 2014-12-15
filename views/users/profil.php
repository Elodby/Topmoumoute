<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<div class="top">
    <h2 class="text-center"><?php echo $this->data['user']['pseudo'] ?></h2>
	<img class="text-center" src='<?php echo $this->data['user']['avatar_url'] ?>' style='height:100px' />
</div>	</div>
  <div class="col-md-4"></div>
</div>

<!--FORMULAIRE-->
<form class="form-horizontal" method="post" action="<?php echo $app->urlFor('user_update')?>">
<fieldset>
<!-- Form Name -->
<legend>Modifier mes informations</legend>

<!--hidden ID input-->
  <input id="id" name="id" value="<?php echo $this->data['user']['id'] ?>" type="hidden">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">Adresse email</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="text" value="<?php echo $this->data['user']['mail'] ?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" value="<?php echo $this->data['user']['password']." " ?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Confirmez le mot de passe</label>
  <div class="col-md-4">
    <input id="password2" name="password2" type="password" value="<?php echo $this->data['user']['password']." " ?>" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="first_name">Prénom</label>  
  <div class="col-md-4">
  <input id="first_name" name="first_name" type="text" value="<?php echo $this->data['user']['first_name']." " ?>" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="last_name">Nom</label>  
  <div class="col-md-4">
  <input id="last_name" name="last_name" type="text" value="<?php echo $this->data['user']['last_name'] ?>" class="form-control input-md">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="avatar_url">Avatar</label>
  <div class="col-md-4">
    <input id="avatar_url" name="avatar_url" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</div>

</fieldset>
</form>


