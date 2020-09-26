<?php
echo '

<!-- footer -->
<div class="container my-5">
	<div class="text-center border-top py-3">
		<a class="text-info pl-2 pr-2" data-toggle="modal" data-target="#aszfModal">ÁSZF</a>
		<a class="text-info pl-2 pr-2" data-toggle="modal" data-target="#gyikModal">GY.I.K.</a>
		<a class="text-info pl-2 pr-2" data-toggle="modal" data-target="#userModal">Felhasználói feltételek</a>
		<a class="text-info pl-2 pr-2" data-toggle="modal" data-target="#gdprModal">Adatvédelemi szabályzat</a>
		<a class="text-info pl-2 pr-2" href="contact.php';
					if(isset($_SESSION['login']))
						echo '?login=1';
					echo '">Kapcsolat</a>
		<a class="text-info pl-2 pr-2" href="aboutus.php';
					if(isset($_SESSION['login']))
						echo '?login=1';
					echo '">Rólunk</a>
	</div>
	<div class="text-center">
		<p class="my-0 font-weight-bold">Kapcsolat</p>
		<p class="my-0"><span class="fa fa-envelope-square"></span>&nbsp;&nbsp;info@onlinepiac.com</p>
	</div>
	<div class="text-center py-3">
		<p>Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
	</div>
</div>
<!-- footer -->

<!-- aszfModal -->
<div class="modal fade modal-bottom p-0" id="aszfModal" data-backdrop="false">
	<div class="modal-dialog m-auto max-width-100">
		<div class="modal-content border-radius-null">
			<div class="modal-header">
				<h3 class="modal-title">Általános szerződési feltételek</h3>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body">
				<h5>Proin luctus</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac lorem id dolor tincidunt egestas sit amet in velit. Integer fringilla semper cursus. Praesent accumsan nulla arcu, at ornare nulla varius condimentum. Pellentesque lacinia, felis non lobortis accumsan, leo massa ultricies tellus, quis auctor tellus lectus at mauris. Pellentesque iaculis vel turpis nec porta. Donec et accumsan diam, eu placerat justo. Cras pulvinar consectetur orci, ac volutpat tortor malesuada in. Pellentesque viverra metus eu lorem tincidunt congue. Morbi vitae augue risus. Praesent facilisis velit odio.</p>
				<h5>Morbi tortor</h5>
				<p>Cras ut tristique nisl. Etiam nec faucibus est. Cras accumsan, dolor et molestie vehicula, libero nunc vehicula sapien, vel porta nisi elit vel ex. Sed sed molestie turpis. Integer volutpat vulputate augue. Ut tincidunt, elit ut laoreet tincidunt, urna massa viverra nisl, sed aliquet mauris risus ut elit. Duis viverra eget sapien nec gravida. Nulla at elit quam. Proin enim nunc, condimentum accumsan blandit eu, tristique ut lorem. Fusce nec urna eu nulla commodo luctus. Curabitur vel ipsum gravida, pharetra ante vel, pretium ipsum. Nunc in maximus odio, vel convallis purus. Nam laoreet aliquet ultricies. Curabitur id massa ac arcu suscipit malesuada. Praesent sed magna nec nunc maximus fringilla rhoncus lobortis elit. Etiam facilisis bibendum leo non pellentesque.</p>
				<h5>Nunc accumsan</h5>
				<p>Sed volutpat euismod neque id hendrerit. Proin luctus eleifend cursus. Cras varius et mauris quis rutrum. Morbi tortor metus, ornare a consequat nec, dignissim non nulla. Curabitur tempus, nisi sagittis tempus aliquet, massa felis auctor ipsum, ut imperdiet est tortor a ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce neque metus, feugiat id rhoncus non, efficitur at felis. Suspendisse maximus orci sit amet facilisis rutrum. Vestibulum accumsan eros ante, ac finibus quam eleifend et. Maecenas tincidunt nec urna vel suscipit. Cras venenatis lobortis eros, nec venenatis sem dictum at. Donec posuere urna vel pretium sodales. Nunc dignissim ipsum eros, ac fermentum sem efficitur nec.</p>
				<h5>Integer fringilla</h5>
				<p>Nunc ac velit porttitor, posuere odio id, dignissim arcu. Etiam ut nisl congue, lacinia sem ac, volutpat velit. Nullam blandit ipsum eu metus fringilla, sed bibendum nisl tempus. Etiam tincidunt rutrum est eu vulputate. Vivamus urna justo, pulvinar at libero nec, porttitor efficitur augue. Morbi faucibus dictum ante, in ullamcorper nisl consequat et. Fusce auctor vestibulum sapien, id suscipit lacus ultricies id. Phasellus vulputate quam a turpis viverra luctus. Duis vehicula, justo non pulvinar vehicula, sapien diam ultrices nisl, vitae scelerisque lacus lacus sed purus. Vivamus consectetur eget urna sed venenatis.</p>
				<h5>Curabitur tempus</h5>
				<p>Cras fermentum lorem a leo tempus mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc accumsan lorem nec est vestibulum commodo. Suspendisse porttitor vitae est quis commodo. Maecenas quis lobortis dui. Nulla nisl velit, dictum a elit eget, iaculis dapibus arcu. Nullam finibus est imperdiet metus accumsan, eget pharetra dui tincidunt. Nam nec iaculis purus. Maecenas tempus non libero non laoreet.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-info" data-dismiss="modal">Bezárás</button>
			</div>
		</div>
	</div>
</div>

<!-- gyikModal -->
<div class="modal fade modal-bottom p-0" id="gyikModal" data-backdrop="false">
	<div class="modal-dialog m-auto max-width-100">
		<div class="modal-content border-radius-null">
			<div class="modal-header">
				<h3 class="modal-title">Gyakran ismételt kérdések</h3>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body">
				<h5>Proin luctus</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac lorem id dolor tincidunt egestas sit amet in velit. Integer fringilla semper cursus. Praesent accumsan nulla arcu, at ornare nulla varius condimentum. Pellentesque lacinia, felis non lobortis accumsan, leo massa ultricies tellus, quis auctor tellus lectus at mauris. Pellentesque iaculis vel turpis nec porta. Donec et accumsan diam, eu placerat justo. Cras pulvinar consectetur orci, ac volutpat tortor malesuada in. Pellentesque viverra metus eu lorem tincidunt congue. Morbi vitae augue risus. Praesent facilisis velit odio.</p>
				<h5>Morbi tortor</h5>
				<p>Cras ut tristique nisl. Etiam nec faucibus est. Cras accumsan, dolor et molestie vehicula, libero nunc vehicula sapien, vel porta nisi elit vel ex. Sed sed molestie turpis. Integer volutpat vulputate augue. Ut tincidunt, elit ut laoreet tincidunt, urna massa viverra nisl, sed aliquet mauris risus ut elit. Duis viverra eget sapien nec gravida. Nulla at elit quam. Proin enim nunc, condimentum accumsan blandit eu, tristique ut lorem. Fusce nec urna eu nulla commodo luctus. Curabitur vel ipsum gravida, pharetra ante vel, pretium ipsum. Nunc in maximus odio, vel convallis purus. Nam laoreet aliquet ultricies. Curabitur id massa ac arcu suscipit malesuada. Praesent sed magna nec nunc maximus fringilla rhoncus lobortis elit. Etiam facilisis bibendum leo non pellentesque.</p>
				<h5>Nunc accumsan</h5>
				<p>Sed volutpat euismod neque id hendrerit. Proin luctus eleifend cursus. Cras varius et mauris quis rutrum. Morbi tortor metus, ornare a consequat nec, dignissim non nulla. Curabitur tempus, nisi sagittis tempus aliquet, massa felis auctor ipsum, ut imperdiet est tortor a ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce neque metus, feugiat id rhoncus non, efficitur at felis. Suspendisse maximus orci sit amet facilisis rutrum. Vestibulum accumsan eros ante, ac finibus quam eleifend et. Maecenas tincidunt nec urna vel suscipit. Cras venenatis lobortis eros, nec venenatis sem dictum at. Donec posuere urna vel pretium sodales. Nunc dignissim ipsum eros, ac fermentum sem efficitur nec.</p>
				<h5>Integer fringilla</h5>
				<p>Nunc ac velit porttitor, posuere odio id, dignissim arcu. Etiam ut nisl congue, lacinia sem ac, volutpat velit. Nullam blandit ipsum eu metus fringilla, sed bibendum nisl tempus. Etiam tincidunt rutrum est eu vulputate. Vivamus urna justo, pulvinar at libero nec, porttitor efficitur augue. Morbi faucibus dictum ante, in ullamcorper nisl consequat et. Fusce auctor vestibulum sapien, id suscipit lacus ultricies id. Phasellus vulputate quam a turpis viverra luctus. Duis vehicula, justo non pulvinar vehicula, sapien diam ultrices nisl, vitae scelerisque lacus lacus sed purus. Vivamus consectetur eget urna sed venenatis.</p>
				<h5>Curabitur tempus</h5>
				<p>Cras fermentum lorem a leo tempus mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc accumsan lorem nec est vestibulum commodo. Suspendisse porttitor vitae est quis commodo. Maecenas quis lobortis dui. Nulla nisl velit, dictum a elit eget, iaculis dapibus arcu. Nullam finibus est imperdiet metus accumsan, eget pharetra dui tincidunt. Nam nec iaculis purus. Maecenas tempus non libero non laoreet.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-info" data-dismiss="modal">Bezárás</button>
			</div>
		</div>
	</div>
</div>

<!-- userModal -->
<div class="modal fade modal-bottom p-0" id="userModal" data-backdrop="false">
	<div class="modal-dialog m-auto max-width-100">
		<div class="modal-content border-radius-null">
			<div class="modal-header">
				<h3 class="modal-title">Felhasználói feltételek</h3>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body">
				<h5>Proin luctus</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac lorem id dolor tincidunt egestas sit amet in velit. Integer fringilla semper cursus. Praesent accumsan nulla arcu, at ornare nulla varius condimentum. Pellentesque lacinia, felis non lobortis accumsan, leo massa ultricies tellus, quis auctor tellus lectus at mauris. Pellentesque iaculis vel turpis nec porta. Donec et accumsan diam, eu placerat justo. Cras pulvinar consectetur orci, ac volutpat tortor malesuada in. Pellentesque viverra metus eu lorem tincidunt congue. Morbi vitae augue risus. Praesent facilisis velit odio.</p>
				<h5>Morbi tortor</h5>
				<p>Cras ut tristique nisl. Etiam nec faucibus est. Cras accumsan, dolor et molestie vehicula, libero nunc vehicula sapien, vel porta nisi elit vel ex. Sed sed molestie turpis. Integer volutpat vulputate augue. Ut tincidunt, elit ut laoreet tincidunt, urna massa viverra nisl, sed aliquet mauris risus ut elit. Duis viverra eget sapien nec gravida. Nulla at elit quam. Proin enim nunc, condimentum accumsan blandit eu, tristique ut lorem. Fusce nec urna eu nulla commodo luctus. Curabitur vel ipsum gravida, pharetra ante vel, pretium ipsum. Nunc in maximus odio, vel convallis purus. Nam laoreet aliquet ultricies. Curabitur id massa ac arcu suscipit malesuada. Praesent sed magna nec nunc maximus fringilla rhoncus lobortis elit. Etiam facilisis bibendum leo non pellentesque.</p>
				<h5>Nunc accumsan</h5>
				<p>Sed volutpat euismod neque id hendrerit. Proin luctus eleifend cursus. Cras varius et mauris quis rutrum. Morbi tortor metus, ornare a consequat nec, dignissim non nulla. Curabitur tempus, nisi sagittis tempus aliquet, massa felis auctor ipsum, ut imperdiet est tortor a ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce neque metus, feugiat id rhoncus non, efficitur at felis. Suspendisse maximus orci sit amet facilisis rutrum. Vestibulum accumsan eros ante, ac finibus quam eleifend et. Maecenas tincidunt nec urna vel suscipit. Cras venenatis lobortis eros, nec venenatis sem dictum at. Donec posuere urna vel pretium sodales. Nunc dignissim ipsum eros, ac fermentum sem efficitur nec.</p>
				<h5>Integer fringilla</h5>
				<p>Nunc ac velit porttitor, posuere odio id, dignissim arcu. Etiam ut nisl congue, lacinia sem ac, volutpat velit. Nullam blandit ipsum eu metus fringilla, sed bibendum nisl tempus. Etiam tincidunt rutrum est eu vulputate. Vivamus urna justo, pulvinar at libero nec, porttitor efficitur augue. Morbi faucibus dictum ante, in ullamcorper nisl consequat et. Fusce auctor vestibulum sapien, id suscipit lacus ultricies id. Phasellus vulputate quam a turpis viverra luctus. Duis vehicula, justo non pulvinar vehicula, sapien diam ultrices nisl, vitae scelerisque lacus lacus sed purus. Vivamus consectetur eget urna sed venenatis.</p>
				<h5>Curabitur tempus</h5>
				<p>Cras fermentum lorem a leo tempus mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc accumsan lorem nec est vestibulum commodo. Suspendisse porttitor vitae est quis commodo. Maecenas quis lobortis dui. Nulla nisl velit, dictum a elit eget, iaculis dapibus arcu. Nullam finibus est imperdiet metus accumsan, eget pharetra dui tincidunt. Nam nec iaculis purus. Maecenas tempus non libero non laoreet.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-info" data-dismiss="modal">Bezárás</button>
			</div>
		</div>
	</div>
</div>


<!-- gdprModal -->
<div class="modal fade modal-bottom p-0" id="gdprModal" data-backdrop="false">
	<div class="modal-dialog m-auto max-width-100">
		<div class="modal-content border-radius-null">
			<div class="modal-header">
				<h3 class="modal-title">Adatvédelemi szabályzat</h3>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body">
				<h5>Proin luctus</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac lorem id dolor tincidunt egestas sit amet in velit. Integer fringilla semper cursus. Praesent accumsan nulla arcu, at ornare nulla varius condimentum. Pellentesque lacinia, felis non lobortis accumsan, leo massa ultricies tellus, quis auctor tellus lectus at mauris. Pellentesque iaculis vel turpis nec porta. Donec et accumsan diam, eu placerat justo. Cras pulvinar consectetur orci, ac volutpat tortor malesuada in. Pellentesque viverra metus eu lorem tincidunt congue. Morbi vitae augue risus. Praesent facilisis velit odio.</p>
				<h5>Morbi tortor</h5>
				<p>Cras ut tristique nisl. Etiam nec faucibus est. Cras accumsan, dolor et molestie vehicula, libero nunc vehicula sapien, vel porta nisi elit vel ex. Sed sed molestie turpis. Integer volutpat vulputate augue. Ut tincidunt, elit ut laoreet tincidunt, urna massa viverra nisl, sed aliquet mauris risus ut elit. Duis viverra eget sapien nec gravida. Nulla at elit quam. Proin enim nunc, condimentum accumsan blandit eu, tristique ut lorem. Fusce nec urna eu nulla commodo luctus. Curabitur vel ipsum gravida, pharetra ante vel, pretium ipsum. Nunc in maximus odio, vel convallis purus. Nam laoreet aliquet ultricies. Curabitur id massa ac arcu suscipit malesuada. Praesent sed magna nec nunc maximus fringilla rhoncus lobortis elit. Etiam facilisis bibendum leo non pellentesque.</p>
				<h5>Nunc accumsan</h5>
				<p>Sed volutpat euismod neque id hendrerit. Proin luctus eleifend cursus. Cras varius et mauris quis rutrum. Morbi tortor metus, ornare a consequat nec, dignissim non nulla. Curabitur tempus, nisi sagittis tempus aliquet, massa felis auctor ipsum, ut imperdiet est tortor a ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce neque metus, feugiat id rhoncus non, efficitur at felis. Suspendisse maximus orci sit amet facilisis rutrum. Vestibulum accumsan eros ante, ac finibus quam eleifend et. Maecenas tincidunt nec urna vel suscipit. Cras venenatis lobortis eros, nec venenatis sem dictum at. Donec posuere urna vel pretium sodales. Nunc dignissim ipsum eros, ac fermentum sem efficitur nec.</p>
				<h5>Integer fringilla</h5>
				<p>Nunc ac velit porttitor, posuere odio id, dignissim arcu. Etiam ut nisl congue, lacinia sem ac, volutpat velit. Nullam blandit ipsum eu metus fringilla, sed bibendum nisl tempus. Etiam tincidunt rutrum est eu vulputate. Vivamus urna justo, pulvinar at libero nec, porttitor efficitur augue. Morbi faucibus dictum ante, in ullamcorper nisl consequat et. Fusce auctor vestibulum sapien, id suscipit lacus ultricies id. Phasellus vulputate quam a turpis viverra luctus. Duis vehicula, justo non pulvinar vehicula, sapien diam ultrices nisl, vitae scelerisque lacus lacus sed purus. Vivamus consectetur eget urna sed venenatis.</p>
				<h5>Curabitur tempus</h5>
				<p>Cras fermentum lorem a leo tempus mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc accumsan lorem nec est vestibulum commodo. Suspendisse porttitor vitae est quis commodo. Maecenas quis lobortis dui. Nulla nisl velit, dictum a elit eget, iaculis dapibus arcu. Nullam finibus est imperdiet metus accumsan, eget pharetra dui tincidunt. Nam nec iaculis purus. Maecenas tempus non libero non laoreet.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-info" data-dismiss="modal">Bezárás</button>
			</div>
		</div>
	</div>
</div>

';
?>
