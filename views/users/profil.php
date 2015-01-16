<div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-9 col-md-push-1">
            <div class="page-header">
                  <h1><?php echo $this->data['user']['pseudo'] ?></h1>
                  <span class="label label-warning"><?php echo $this->data['followers']['nbr']." Followers" ;?></span>
                  <span class="label label-warning"><?php echo $this->data['tops']['nbr'] ?> Tops publiés</span></br></br>
                  <button type="submit" class="btn btn-success">Voir mes tops</button>
            </div>
            <div class="row">
              <div class="col-md-5">
                <img src="<?php if($this->data['user']['avatar_url']!=null) echo "./uploadedfiles/".$this->data['user']['avatar_url'] ?>" width="250px" class="img-circle">
              </div>
              <div class="col-md-7">
                <p class="bg-info">Informations :</p>
                <form method="post" action="<?php echo $app->urlFor('user_update')?>" enctype="multipart/form-data">
                  <input id="id" name="id" value="<?php echo $this->data['user']['id'] ?>" type="hidden">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nouvel Email</label>
                    <input id="mail" name="mail" type="text" value="<?php echo $this->data['user']['mail'] ?>" class="form-control input-md" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="password" name="password" type="password" class="form-control input-md" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirmation du password</label>
                    <input id="password2" name="password2" type="password" class="form-control input-md" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Nouvelle image de profil</label>
                    <input type="file" name="avatar">
                    <p class="help-block">Choisissez une image dans vos fichiers</p>
                  </div>
                  <button name="submit" type="submit" class="btn btn-success">Mettre à jour </button>
                </form>
              </div>
            </div>
            <div class="row">

            </div>
          </div>
        </div>
      </div>
    </div>
