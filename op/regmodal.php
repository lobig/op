<?php

echo '
<!-- regModal -->
<div class="modal fade modal-top p-0" id="regModal" data-backdrop="true">
	<div class="modal-dialog m-auto">
		<div class="modal-content border-radius-null">
			<div class="modal-header border-radius-null modal-bg">
			<h3 class="modal-title">Regisztráció</h3>
				<button type="button" class="close" data-dismiss="modal" style="padding-top: 22px;"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body modal-bg">
				<div class="form-group">
					<label for="regemail">E-mail cím:</label>
					<input type="email" class="form-control" placeholder="" id="regemail">
				</div>
				<div class="form-group">
					<label for="regpwd">Jelszó:</label>
					<input type="password" class="form-control" placeholder="" id="regpwd">
					<small id="passwordHelpInline" class="text-muted">A jelszó 8-20 karakter hosszú lehet, és tartalmaznia kell kis- és nagybetűket, valamint számokat.</small>      
				</div>
				<div class="form-group">
					<label for="regpwd2">Jelszó mégegyszer:</label>
					<input type="password" class="form-control" placeholder="" id="regpwd2">
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					<label class="form-check-label" for="defaultCheck1">A <a class="text-info" data-toggle="modal" data-target="#userModal">Felhasználói feltételek</a>et és az <a class="text-info" data-toggle="modal" data-target="#gdprModal">Adatvédelmi szabályzat</a>ot elfogadom.</label>
				</div>
			</div>
			<div class="modal-footer modal-bg">
				<div class="row">
					<div class="col-sm">
						<button type="button" class="btn btn-info btn-block" data-dismiss="modal">Regisztráció</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
';

?>