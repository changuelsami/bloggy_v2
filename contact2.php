
<div class="row" id="content">
    			<div class="col-md-9" id="content_text">
					<h1>Contactez moi</h1>

					<?php
					if (isset($_GET['retour']))
					{
						?>
<div class="alert alert-success">
  Merci. Votre message intitulé "<?php echo $_GET['sujet'] ?>" a bien été enregistrée.
</div>
						<?php
					}
					?>

					 <form class="form-horizontal" action="contact_action2.php" method="post">
					  <div class="form-group has-feedback">
					    <label class="control-label col-sm-2" for="email" >E-mail *:</label>
					    <div class="col-sm-10"><input type="email" class="form-control" id="email" name="email" required="required"> 
					    <span class="glyphicon glyphicon-warning-sign form-control-feedback">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-2" for="sujet">Sujet *:</label>
					    <div class="col-sm-10"><input type="text" class="form-control" id="sujet" name="sujet" required="required"> </div>
					  </div>

					  <div class="form-group">
					  	<label class="control-label col-sm-2" for="message">Message *:</label>
					  	<div class="col-sm-10"><textarea class="form-control" required="required" id="message" name="message" ></textarea> </div>
					  </div>

					  <div class="checkbox">
					    <label class="col-sm-offset-2 col-sm-10">
					    <input type="checkbox" id="newsletter" name="newsletter" value="1"> M'inscire à la newsletter</label>
					  </div>

					  <input type="submit" value="Envoyer" class="btn btn-default">
					</form>
	    		</div>
    			<div class="col-md-3 " id="sidebar">
					Sidebar Lorem ipsum, quis nostrud exercitation ullamco
	                laboris nisi ut aliquip ex ea commodo consequat
    			</div>
    		</div>

