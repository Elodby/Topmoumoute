<div class="media">
  <div class="media-body">

    <h3><?php echo $this->data['top'][0]['to_title'] ?></h3>
      <input name="title" type="hidden" value="<?php echo $this->data['top'][0]['to_title'] ?>"/>
    <p><?php echo $this->data['top'][0]['to_description'] ?></p>
      <input name="description" type="hidden" value="<?php echo $this->data['top'][0]['to_description'] ?>"/>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <a href="retop/elements">
          <button id="submit" name="submit" class="btn btn-primary">Retoper ce top</button>
        </a>
      </div>
    </div>

  </div>
</div>