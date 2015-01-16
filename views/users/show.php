<?php if(isset($_SESSION['id']) && isset($this->data['user']['id']) && $_SESSION['id']!=$this->data['user']['id']) 
    $add_follow=User::follow($this->data['user']['id'], $_SESSION['id']); else $add_follow="#";?>
<div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-9 col-md-push-2">
            <div class="page-header">
                  <h1><?php echo $this->data['user']['pseudo'] ?></h1>
                  <span class="label label-warning"><?php echo $this->data['followers']['nbr']." Followers" ;?></span>
                  <span class="label label-warning"><?php echo $this->data['tops']['nbr'] ?> Tops publiés</span></br></br>
                  <button type="submit" class="btn btn-success">Voir ses tops</button>
                  <a href="<?php echo $add_follow ?>"><button class="btn btn-success" type="submit">Suivre</button></a>
            </div>
            <div class="row">
              <div class="col-md-4">
                <img src="<?php if($this->data['user']['avatar_url']!=null) echo "./uploadedfiles/".$this->data['user']['avatar_url'] ?>" width="200px" class="img-circle">
              </div>
              <div class="col-md-6">
                <p class="bg-info">Informations :</p>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <p id="mail"><?php echo $this->data['user']['mail'] ?></p>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
