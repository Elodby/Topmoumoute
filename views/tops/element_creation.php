<form method="post" action="<?php echo $app->urlFor('top_creat')?>" class="form-horizontal">
	

        <!-- Form Name -->
   <legend>Créer un element</legend>

        <input type="hidden" name="top_id", value="<?php echo $this->data['top_id']?>"/>
        <input type="hidden" name="cat_id" value="<?php echo $this->data['category']?>" />
<?php var_dump($this->data); ?>

          <div class="unElement">  
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Element 1</label>  
              <div class="col-md-4">
              <input type="hidden" value="1" name="emplacement[]" class="form-control input-md">
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
          </div>  
          </br></br>


          <div class="unElement">  
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Element 2</label>  
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
          </div>  
          </br></br>


          <div class="unElement">  
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Element 3</label>  
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
          </div>  
          </br></br>


          <div class="unElement">  
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Element 4</label>  
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
          </div>  
          </br></br>


          <div class="unElement">  
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Element 5</label>  
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
          </div>  
          </br></br>





        <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
              <button id="submit" name="submit" class="btn btn-primary">Valider</button>
            </div>
          </div>

  
</form>