<div class="modal" id="regisztracio-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Bezárás">
            	<span aria-hidden="true">&times;</span>
            </button>
        	<h3 class="modal-title" id="modalLabel">Regisztráció</h3>
        </div> <!--modal-header-->
      	<div class="modal-body">
            <form class="" method="post" action="">
            <div class="form-group">
              <label for="nev"><strong>Név*</strong></label>
              <input class="form-control" type="text" placeholder="Név" min="5" name="nev" id="nev" required>
            </div> 
            <div class="form-group">
              <label for="telefon"><strong>Telefon*</strong></label>
              <input class="form-control" type="text" placeholder="Telefon" name="telefon" id="telefon" required>
            </div> 
            <div class="form-group">
              <label for="email"><strong>Email*</strong></label>
              <input class="form-control" type="text" placeholder="Email" name="email" id="reg-email" required>
            </div> 
            <div class="form-group">
              <label for="pwd"><strong>Jelszó*</strong></label>
              <input class="form-control" type="password" placeholder="Jelszó" name="pwd" id="reg-pwd" required>
            </div> 
            <div class="form-group">
              <label for="pwd2"><strong>Jelszó mégegyszer*</strong></label>
              <input class="form-control" type="password" placeholder="Jelszó mégegyszer" name="pwd2" id="pwd2" required>
            </div> 
              <button class="btn btn-default" type="submit" name="regisztracio-submit">Regisztrálok</button>
            </form>
            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal" aria-label="Bezárás" type="button" >Mégse</button>
            </div> <!--modal-footer-->
         </div> <!--modal-body-->  
      </div>
    </div>
</div>