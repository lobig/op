<?php
echo '

<nav class="navbar navbar-light sticky-top border-bottom">
	<a class="navbar-brand" href="index.php';
			if(isset($_SESSION['login']))
				echo '?login=1';
			echo '"><img src="https://64.media.tumblr.com/5845a476f93a43a8651a20737ee70e97/tumblr_nv5obzYWqM1uhn5ypo1_r3_1280.png" class="navbar-logo">&nbsp;&nbsp;Online piac</a><button type="button" class="btn pull-right" data-toggle="modal" data-target="#menuModal"><span class="fa fa-bars fa-lg align-middle"></span></button>
	<button type="button" class="btn pull-right" data-toggle="modal" data-target="#searchModal"><span class="fa fa-search fa-lg align-middle"></span></button>';
	if(isset($_SESSION['login']))
		echo '<a href="profil.php?login=1"><button type="button" class="btn pull-right"><span class="fa fa-user fa-lg align-middle"></span></button></a>';
	else
		echo '<button type="button" class="btn pull-right" data-toggle="modal" data-target="#loginModal"><span class="fa fa-user-o fa-lg align-middle"></span></button>';

echo '	
	
</nav>';

include 'loginmodal.php';

include 'regmodal.php';

include 'searchmodal.php';

echo '	
<!-- menuModal -->
<div class="modal fade modal-right p-0" id="menuModal" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height">
			<div class="modal-header border-radius-null header-bg">
';

	if(isset($_SESSION['login']))
		echo '	<a href="profil.php?login=1" class="text-light"><h3 class="modal-title">Profilom</h3></a>';
	else
		echo '	<a class="text-light" data-dismiss="modal" data-toggle="modal" data-target="#loginModal"><h3 class="modal-title">Bejelentkezés</h3></a>';

echo '				
				<button type="button" class="close text-light" data-dismiss="modal" style="padding-top: 22px;"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="modal-body modal-bg p-0">
				<ul class="list-group border-radius-null">
';

	if(isset($_SESSION['login']))
		echo '<a href="hirdetes.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Hirdetés feladás</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>';

echo '
					<a data-toggle="modal" data-target="#babaruhak5086"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Baba ruhák 50-86</h5><span class="fa fa-chevron-right pull-right margintop5px"></span></li></a>
					<a data-toggle="modal" data-target="#lanyruhak92170"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Lány ruhák 92-170</h5><span class="fa fa-chevron-right pull-right margintop5px"></span></li></a>
					<a data-toggle="modal" data-target="#fiuruhak92170"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Fiú ruhák 92-170</h5><span class="fa fa-chevron-right pull-right margintop5px"></span></li></a>
					<a data-toggle="modal" data-target="#noiruhak"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Női ruhák</h5><span class="fa fa-chevron-right pull-right margintop5px"></span></li></a>
					<a data-toggle="modal" data-target="#ferfiruhak"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Férfi ruhák</h5><span class="fa fa-chevron-right pull-right margintop5px"></span></li></a>
					<a href="category.php';if(isset($_SESSION['login']))
						echo '?login=1';
						echo '"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kategóriák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="aboutus.php';
						if(isset($_SESSION['login']))
						echo '?login=1';
						echo '"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Rólunk</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="contact.php';
						if(isset($_SESSION['login']))
						echo '?login=1';
						echo '"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kapcsolat</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>';
	if(isset($_SESSION['login']))
		echo '		<a href="index.php?login=0"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0"><span class="fa fa-power-off"></span>&nbsp;&nbsp;Kijelentkezés</h5></li></a>';

echo '				
				
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- babaruhak5086 -->
<div class="modal fade modal-right p-0" id="babaruhak5086" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height">
			<div class="modal-header border-radius-null header-bg">
				<a class="text-light" data-dismiss="modal" ><h3 class="modal-title">Vissza</h3></a>
			</div>
			<div class="modal-body modal-bg p-0">
				<ul class="list-group border-radius-null">
';

	if(isset($_SESSION['login']))
		echo '		<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Body-k</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Együttesek és rugdalózók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Alsók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Ruhák, szoknyák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Pizsamák, hálózsákok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';
	else
			echo '
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Body-k</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Együttesek és rugdalózók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Alsók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Ruhák, szoknyák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Pizsamák, hálózsákok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>';

echo '
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- lanyruhak92170 -->
<div class="modal fade modal-right p-0" id="lanyruhak92170" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height">
			<div class="modal-header border-radius-null header-bg">
				<a class="text-light" data-dismiss="modal" ><h3 class="modal-title">Vissza</h3></a>
			</div>
			<div class="modal-body modal-bg p-0">
				<ul class="list-group border-radius-null">
';

	if(isset($_SESSION['login']))
		echo '		<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Ruhák és szoknyák, alkalmi viselet</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók és blúzok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Pulóverek, kardigánok és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok és leggingek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Szabadidőruhák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Body-k, együttesek és rugdalózók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kabátok, esőkabátok, overálok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';
	else
			echo '
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Ruhák és szoknyák, alkalmi viselet</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók és blúzok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Pulóverek, kardigánok és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok és leggingek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Szabadidőruhák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Body-k, együttesek és rugdalózók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kabátok, esőkabátok, overálok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';

echo '
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- fiuruhak92170 -->
<div class="modal fade modal-right p-0" id="fiuruhak92170" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height">
			<div class="modal-header border-radius-null header-bg">
				<a class="text-light" data-dismiss="modal" ><h3 class="modal-title">Vissza</h3></a>
			</div>
			<div class="modal-body modal-bg p-0">
				<ul class="list-group border-radius-null">
';

	if(isset($_SESSION['login']))
		echo '		<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók és ingek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Pulóverek, kardigánok és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Alkalmi viselet és szettek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Szabadidőruhák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kabátok, esőkabátok, overálok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';
	else
			echo '
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók és ingek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Pulóverek, kardigánok és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Alkalmi viselet és szettek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Szabadidőruhák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kabátok, esőkabátok, overálok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';

echo '
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- noiruhak -->
<div class="modal fade modal-right p-0" id="noiruhak" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height">
			<div class="modal-header border-radius-null header-bg">
				<a class="text-light" data-dismiss="modal" ><h3 class="modal-title">Vissza</h3></a>
			</div>
			<div class="modal-body modal-bg p-0">
				<ul class="list-group border-radius-null">
';

	if(isset($_SESSION['login']))
		echo '		<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Ruhák és szoknyák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók, ingek és blúzok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kardigánok, pulóverek és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Dzsekik, kabátok és blézerek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kismamaruházat</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';
	else
			echo '
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Ruhák és szoknyák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók, ingek és blúzok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kardigánok, pulóverek és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Dzsekik, kabátok és blézerek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kismamaruházat</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';

echo '
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- ferfiruhak -->
<div class="modal fade modal-right p-0" id="ferfiruhak" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height">
			<div class="modal-header border-radius-null header-bg">
				<a class="text-light" data-dismiss="modal" ><h3 class="modal-title">Vissza</h3></a>
			</div>
			<div class="modal-body modal-bg p-0">
				<ul class="list-group border-radius-null">
';

	if(isset($_SESSION['login']))
		echo '		<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók és ingek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kardigánok, pulóverek és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Dzsekik, kabátok és zakók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Szabadidőruhák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php?login=1"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';
	else
			echo '
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Felsők, pólók és ingek</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kardigánok, pulóverek és mellények</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Nadrágok</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Dzsekik, kabátok és zakók</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Szabadidőruhák</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Éjszakai viselet, alsónemű</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
					<a href="search.php"><li class="list-group-item modal-bg"><h5 class="text-dark inline-block m-0">Kiegészítők</h5><span class="fa fa-chevron-circle-right pull-right margintop5px text-dark"></span></li></a>
				';

echo '
				</ul>
			</div>
		</div>
	</div>
</div>
';
?>
