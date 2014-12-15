<form method="post" action="<?php echo $app->urlFor('top_creat')?>" class="form-horizontal">
	
        
        <!-- Form Name -->
        <legend>Créer un element</legend>

        <input type="hidden" name="top_id", value="<?php echo $this->data['top_id']?>"/>
        
        <?php //while ( $_POST['nbElement'] != 0) {?>

            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Emplacement</label>  
              <div class="col-md-4">
              <input type="text" id="emplacement" name="emplacement" class="form-control input-md">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Titre</label>  
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

        <?php //}  ?>

        <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
              <button id="submit" name="submit" class="btn btn-primary">Valider</button>
            </div>
          </div>

  
</form>