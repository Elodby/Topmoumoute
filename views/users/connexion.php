<form class="form-horizontal" method="post" action="<?php echo $app->urlFor('root_connexion')?>">
<fieldset>

<!-- Form Name -->
<legend>Connexion</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pseudo">Pseudo</label>  
  <div class="col-md-4">
  <input id="pseudo" name="pseudo" type="text" placeholder="pseudo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Connexion</button>
  </div>
</div>
</fieldset>
</form>
  <label class="col-md-4 control-label" for="submit"></label>
  <a href="<?php echo $app->urlFor('inscription') ?>"><button id="inscription" name="inscription" class="btn btn-warning" style="margin-left:10px; margin-bottom:10px;">Inscription</button></a>