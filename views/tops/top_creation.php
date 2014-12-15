<form method="post" action="<?php echo $app->urlFor('creation_elements')?>" class="form-horizontal">
   <fieldset>
        
        <!-- Form Name -->
        <legend>Créer un top</legend>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="title">Titre du top</label>  
          <div class="col-md-4">
            <input id="title" name="title" type="text" placeholder="Titre" class="form-control input-md">
          </div>
        </div>


        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Description</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="description" name="description"></textarea>
          </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="category">Categorie</label>
          <div class="col-md-4">
            <select id="category" name="category" class="form-control">
              
              <?php foreach($this->data['category'] as $category){
                   echo '<option value="'.$category["id"].'>'.$category["cat_title"].'</option>';
              }?>
             
              <option value="1">Humour</option>
              <option value="2">Film</option>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="title"> Combien d'elements voulez-vous mettre?</label>  
          <div class="col-md-4">
            <input id="nbElement" name="nbElement" type="text" placeholder="Nombre d'elements" class="form-control input-md">
          </div>
        </div>


        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Valider</button>
          </div>
        </div>

    </fieldset>
</form>