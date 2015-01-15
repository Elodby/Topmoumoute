<?php if(isset($_SESSION['id'])) $add_like=Top::like($this->data['top'][0]['top_id'], $_SESSION['id']); ?>
<?php if(isset($_SESSION['id']) && isset($this->data['resUser']['id']) && $_SESSION['id']!=$this->data['resUser']['id']) 
	$add_follow=User::follow($this->data['resUser']['id'], $_SESSION['id']); else $add_follow="#";?>
<div class="media">
  <div class="media-body">
		<?php
		if ($this->data['resTop']!=null){ ?>
			<div class="page-header">
			  <h1><small>Resultats par tops :</small></h1>
			</div>
			<div class="row">
				<?php foreach($this->data['resTop'] as $res) { 
			            $titre=$res['title']; $description=$res['description']; $id=$res['id']; ?>

			            <div class="col-md-4" style="width:250px; height:200px;">
			            	<a href='<?php echo "tops-".$id ?>'>
								<div class="thumbnail" >
								  <div class="caption">
									<h3><?php echo $titre ?></h3>
									<p><?php echo $description ?></p>
									<p><a href="#" class="btn btn-info" role="button">Toper !</a></p>
								  </div>
								</div>
							</a>
			  			</div>
			                
			        <?php
			            $resultat="";
			            $titre="";
			            $req="";
			        }  ?>
	        </div>
       <?php } ?>

        <?php
		  if ($this->data['resUser']!=null){ ?>
			<div class="page-header">
			  <h1><small>Resultats par auteurs :</small></h1>
			</div>
			<div class="row">
				<?php foreach($this->data['resUser'] as $res) { 
			            $pseudo=$res['pseudo']; $id=$res['id']; ?>

			            <div class="col-md-4" style="width:250px; height:200px;">
			            	<a href='<?php echo "users-".$id ?>'>
								<div class="thumbnail" >
								  <div class="caption" >
									<h3><?php echo $pseudo ?></h3>
									<p><a href="<?php echo $add_follow ?>"><button class="btn btn-info" type="submit">Suivre</button></a></p>
								  </div>
								</div>
							</a>
			  			</div>
			                
			        <?php
			            $resultat="";
			            $titre="";
			            $req="";
			        } ?>
	        </div>
       <?php } ?>

  </div>
</div>
