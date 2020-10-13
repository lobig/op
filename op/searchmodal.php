<?php

echo '
<!-- searchModal -->
<div class="modal fade modal-top p-0" id="searchModal" data-backdrop="false">
	<div class="modal-dialog ml-auto max-width-100">
		<div class="modal-content rounded-0">
			<div class="modal-body-searchbar">
				<form action="../includes/search.php" method="get" autocomplete="on">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Keresés" name="search" id="search" autocomplete="on">';
					if(isset($_SESSION['login']))
						echo '<input type="text" class="form-control display-none" value="1" name="login">';
					echo '
					<div class="input-group-append">
						<button type="submit" class="btn btn-info"><span class="fa fa-search"></span></button>
					</div>
					<button type="button" class="close ml-3 mr-1" data-dismiss="modal"><span class="fa fa-times"></span></button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
';

?>