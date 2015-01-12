<form method="post" action="<?php echo $app->urlFor('creation_elements')?>" class="form-horizontal">
   <fieldset>
         
    <!-- Form Name -->
    <legend>Créer un top</legend>

<?php var_dump($this->data['categories']); ?>
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

    <?php if (isset($this->data['categories'])){ ?>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="category">Categorie</label>
        <div class="col-md-4">
          <select id="category" name="category" class="form-control">
           
            <?php foreach($this->data['categories'] as $category){
              $category_id = $category['cat_id'];
            ?>
              <option value= "<?php echo $category_id ?>" > <?php echo $category['cat_title']; ?> </option>;
            <?php } ?>
           
          </select>
        </div>
      </div>
    <?php }?>


    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Valider</button>
      </div>
    </div>

    </fieldset>
</form>