<div class="modal" id="belepes-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Bezárás">
            	<span aria-hidden="true">&times;</span>
            </button>
        	<h3 class="modal-title" id="modalLabel">Belépés</h3>
        </div> <!--modal-header-->
      	<div class="modal-body">
            <form class="" method="post" action="">
            <div class="form-group">
              <label for="email"><strong>Email</strong></label>
              <input class="form-control" type="text" placeholder="Email" name="email" id="login-email" required>
            </div> 
            <div class="form-group">
              <label for="pwd"><strong>Jelszó</strong></label>
              <input class="form-control" type="password" placeholder="Jelszó" name="pwd" id="login-pwd" required>
            </div> 
              <button class="btn btn-default" type="submit" name="login-submit">Belépés</button>
              <a class="text-right" href="elfelejtett-jelszo.php">elfelejtett jelszó</a>
            </form>
            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal" aria-label="Bezárás" type="button">Mégse</button>
            </div> <!--modal-footer-->
         </div> <!--modal-body-->  
      </div>
    </div>
</div>