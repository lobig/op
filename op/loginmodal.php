<?php


echo '
<!-- loginModal -->
<div class="modal fade modal-top p-0" id="loginModal" data-backdrop="true">
	<div class="m-auto">
		<div class="modal-content rounded-0">
			<div class="modal-header rounded-0 LavenderBlush">
				<h3 class="modal-title">Bejelentkezés</h3>
				<button type="button" class="close" data-dismiss="modal" style="padding-top: 22px;"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body LavenderBlush">
				<div class="form-group">
					<label for="loginemail">E-mail cím:</label>
					<input type="email" class="form-control" placeholder="" id="loginemail">
				</div>
				<div class="form-group">
					<label for="loginpwd">Jelszó:</label>
					<input type="password" class="form-control" placeholder="" id="loginpwd">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox">&nbsp;Belépve maradok!
					</label>
				</div>
			</div>
			<div class="modal-footer LavenderBlush justify-content-center">
				<div class="row">
					<div class="col">
						<a href="'; echo $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']; echo'&login=1"><button type="button" class="btn btn-info">Bejelentkezés</button></a>
					</div>
					<div class="col">
						<button type="button" class="btn btn-outline-dark" data-dismiss="modal" data-toggle="modal" data-target="#regModal">Regisztráció</button>
					</div>
				</div>
			</div>
			<div class="modal-footer LavenderBlush">
				<div class="text-center m-auto">
					<a href="http://www.google.com"><button type="button" class="btn btn-google mb-2 btn-block"><span class="fa fa-google fa-lg"></span>&nbsp;Belépés Google fiókkal</button></a>
					<a href="http://www.facebook.com"><button type="button" class="btn btn-facebook mb-2 btn-block"><span class="fa fa-facebook fa-lg"></span>&nbsp;Belépés Facebook fiókkal</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
';

?>