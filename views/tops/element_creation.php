<form method="post" action="<?php echo $app->urlFor('top_creat')?>" class="form-horizontal" enctype="multipart/form-data">
	
        <!-- Form Name -->
   <legend>Contenu du top</legend>
   <p>Saisissez les 5 éléments de votre top, du premier au dernier.</p>
   <br><br>

    <input type="hidden" name="top_id", value="<?php echo $this->data['top_id']?>"/>
    <input type="hidden" name="cat_id" value="<?php echo $this->data['category']?>" />
<?php //var_dump($this->data); ?>

    <div class="unElement">  
        <div class="form-group">
          <h4 class="col-md-4 control-label" for="title">Numero 1</h4>  
          <div class="col-md-4">
          <input type="hidden" value="1" name="emplacement[]" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="title">Titre</label>  
          <div class="col-md-4">
          <input name="title[]" type="text" placeholder="Titre" class="form-control input-md">
            
          </div>
        </div>


        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Description</label>
          <div class="col-md-4">
            <textarea class="form-control" name="description[]"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="title">Image de l'élément</label>
          <div class="col-md-4">
            <input type="file" name="image[]">
            <p class="help-block">Choisissez une image dans vos fichiers</p>
            <p class="bg-info" style="padding:3px;">Cette image représentera votre top</p>
          </div>
        </div>
    </div> 
    </br></br>


    <div class="unElement">  
      <div class="form-group">
        <h4 class="col-md-4 control-label" for="title">Numero 2</h4>  
        <div class="col-md-4">
        <input type="hidden" value="2" name="emplacement[]" class="form-control input-md">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="title">Titre</label>  
        <div class="col-md-4">
        <input name="title[]" type="text" placeholder="Titre" class="form-control input-md">
          
        </div>
      </div>


      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="description">Description</label>
        <div class="col-md-4">
          <textarea class="form-control" name="description[]"></textarea>
        </div>
      </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="title">Image de l'élément</label>
          <div class="col-md-4">
            <input type="file" name="image[]">
            <p class="help-block">Choisissez une image dans vos fichiers</p>
          </div>
        </div>
    </div> 
    </br></br>


    <div class="unElement">  
      <div class="form-group">
        <h4 class="col-md-4 control-label" for="title">Numero 3</h4>  
        <div class="col-md-4">
        <input type="hidden" value="3" name="emplacement[]" class="form-control input-md">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="title">Titre</label>  
        <div class="col-md-4">
        <input name="title[]" type="text" placeholder="Titre" class="form-control input-md">
          
        </div>
      </div>


      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="description">Description</label>
        <div class="col-md-4">
          <textarea class="form-control" name="description[]"></textarea>
        </div>
      </div>

      <div class="form-group">
          <label class="col-md-4 control-label" for="title">Image de l'élément</label>
          <div class="col-md-4">
            <input type="file" name="image[]">
            <p class="help-block">Choisissez une image dans vos fichiers</p>
          </div>
        </div>
    </div> 
    </br></br>


    <div class="unElement">  
      <div class="form-group">
        <h4 class="col-md-4 control-label" for="title">Numero 4</h4>  
        <div class="col-md-4">
        <input type="hidden" value="4" name="emplacement[]" class="form-control input-md">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="title">Titre</label>  
        <div class="col-md-4">
        <input name="title[]" type="text" placeholder="Titre" class="form-control input-md">
          
        </div>
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="description">Description</label>
        <div class="col-md-4">
          <textarea class="form-control" name="description[]"></textarea>
        </div>
      </div>

      <div class="form-group">
          <label class="col-md-4 control-label" for="title">Image de l'élément</label>
          <div class="col-md-4">
            <input type="file" name="image[]">
            <p class="help-block">Choisissez une image dans vos fichiers</p>
          </div>
        </div>
    </br></br>


    <div class="unElement">  
      <div class="form-group">
        <h4 class="col-md-4 control-label" for="title">Numero 5</h4>  
        <div class="col-md-4">
        <input type="hidden" value="5" name="emplacement[]" class="form-control input-md">
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="title">Titre</label>  
        <div class="col-md-4">
        <input name="title[]" type="text" placeholder="Titre" class="form-control input-md">
          
        </div>
      </div>


      <!-- Textarea -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="description[]">Description</label>
        <div class="col-md-4">
          <textarea class="form-control" name="description[]"></textarea>
        </div>
      </div>

      <div class="form-group">
          <label class="col-md-4 control-label" for="title">Image de l'élément</label>
          <div class="col-md-4">
            <input type="file" name="image[]">
            <p class="help-block">Choisissez une image dans vos fichiers</p>
          </div>
        </div>
    </div> 
    </br></br>







    <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
          <button id="submit" name="submit" class="btn btn-primary">Valider mon top</button>
        </div>
      </div>


</form>