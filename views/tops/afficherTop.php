               
              <div class="col-md-7">
                  <h1><small><?php echo $this->data['top'][0]['to_title']." :"; ?></small></h1>
                  <h2><small>description du top </small></h2>
                  <h3><small>Soumis par <a href="<?php echo "users-".$this->data['top'][0]['user_id']?>"><?php echo $this->data['top'][0]['pseudo'] ;?></a></small></h3>
              </div>

              <div class="col-md-5">
                    <div class="row">
                       <div class="col-md-6">
                        <a class="fb_share"  name="fb_share" type="button_count" share_url="http://localhost/Topmoumoute/tops-<?php echo $this->data['top'][0]['top_id']; ?>" style="margin-bottom:5px"></a>
                        </div>
                        <div class="col-md-6">
                        <a href="https://twitter.com/share" style="margin-top:5px;" class="twitter-share-button">Tweet</a>
                        </div>
                    </div>
                </div>
                  <!--
                <div class="row">
                  <div class="col-md-4">
                    <button class="btn btn-warning" type="submit">Toper</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-danger" type="submit">Liker</button>
                  </div>
                  <div class="col-md-4">
                    <button class="btn btn-info" type="submit">Suivre</button>
                  </div>
                </div>
              -->
                <div class="row">
                  <div class="col-md-7">
                    <div class="thumbnail">
                      <img src="pictures/elsa.png" width="470px" alt="">
                      <div class="caption">
                        <h3><?php echo $this->data['top'][0]['el_title'] ;?></h3>
                        <p><?php echo $this->data['top'][0]['description'] ;?></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-5">
                  <?php foreach ($this->data['top'] as $elements => $value) { if($elements!=0) {?>
                    <div class="row">
                      <div class="thumbnail">
                      <ul class="media-list">
                        <li class="media">
                          <a class="media-left" href="#">
                            <img src="pictures/elsa.png" width="90px">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading"><?php echo $value['el_title']; ?></h4>
                            <?php echo $value['description']; ?>
                          </div>
                        </li>
                      </ul>
                    </div>
                    </div>
                    <?php }} ?>

                        <div class="row">
                          <div class="col-md-4">
                            <button class="btn btn-warning" type="submit">Toper</button>
                          </div>
                          <div class="col-md-4">
                            <button class="btn btn-danger" type="submit">Liker</button>
                          </div>
                          <div class="col-md-4">
                            <button class="btn btn-info" type="submit">Suivre</button>
                          </div>
                        </div>
                  </div>
                </div>