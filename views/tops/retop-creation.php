<div class="row">
  <?php foreach ($this->data['top'] as $top): ?>
    <div class="col-md-3" >
    <div class="thumbnail">
      <img src="<?php echo $top['image_url'] ?>" width="300px" alt="">
      <div class="caption">
      <h3><?php echo $top['title'] ?></h3>
      <p><?php echo $top['description'] ?></p>
      <p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
      </div>
    </div>
    </div>
  <?php endforeach; ?>
</div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Retoper ce top</button>
      </div>
    </div>

    </fieldset>
</form>