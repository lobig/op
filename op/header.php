<?php

$json = '
{
    "Baba ruhák 50-86": {
        "1": "Body-k",
        "2": "Együttesek és rugdalózók",
        "3": "Felsők"
    },
    "Lány ruhák 92-170": {
        "4": "Ruhák és szoknyák, alkalmi viselet",
        "5": "Felsők, pólók és blúzok",
        "6": "Pulóverek, kardigánok és mellények"
    },
    "Fiú ruhák 92-170": {
        "7": "Felsők, pólók és ingek",
        "8": "Pulóverek, kardigánok és mellények",
        "9": "Nadrágok"
    },
    "Női ruhák": {
        "10": "Ruhák és szoknyák",
        "11": "Felsők, pólók, ingek és blúzok",
        "12": "Kardigánok, pulóverek és mellények"
    },
    "Férfi ruhák": {
        "13": "Felsők, pólók és ingek",
        "14": "Kardigánok, pulóverek és mellények",
        "15": "Nadrágok"
    }
}
';

$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
    'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
    'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
    'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
    'ö'=>'o', 'ő'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

$json = json_decode($json, true);
$total_items = count($json);
$mainCategories = array_keys($json);

echo '

<nav class="navbar navbar-light sticky-top border-bottom">
	<a class="navbar-brand" href="../index.php';
			if(isset($_SESSION['login']))
				echo '?login=1';
			echo '"><img src="https://64.media.tumblr.com/5845a476f93a43a8651a20737ee70e97/tumblr_nv5obzYWqM1uhn5ypo1_r3_1280.png" class="navbar-logo">&nbsp;&nbsp;Online piac</a><button type="button" class="btn pull-right" data-toggle="modal" data-target="#menuModal"><span class="fa fa-bars fa-lg align-middle"></span></button>
	<button type="button" class="btn pull-right" data-toggle="modal" data-target="#searchModal"><span class="fa fa-search fa-lg align-middle"></span></button>';
	if(isset($_SESSION['login']))
		echo '<a href="../includes/profil.php?login=1"><button type="button" class="btn pull-right"><span class="fa fa-user fa-lg align-middle"></span></button></a>';
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
	<div class="modal-dialog ml-auto full-height w-85">
		<div class="modal-content rounded-0 full-height LavenderBlush">
			<div class="modal-header rounded-0 btn-info-color">
';

	if(isset($_SESSION['login']))
		echo '	<a href="../includes/profil.php?login=1" class="text-light"><h3 class="modal-title">Profilom</h3></a>';
	else
		echo '	<a class="text-light" data-dismiss="modal" data-toggle="modal" data-target="#loginModal"><h3 class="modal-title">Bejelentkezés</h3></a>';

echo '				
				<button type="button" class="close text-light" data-dismiss="modal" style="padding-top: 22px;"><span aria-hidden="true"><span class="fa fa-times"></span></span></button>
			</div>
			<div class="LavenderBlush p-0">
				<ul class="list-group rounded-0">
';

	if(isset($_SESSION['login']))
		echo '<a href="../includes/hirdetes.php?login=1"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">Hirdetés feladás</h5><span class="fa fa-chevron-circle-right pull-right mt-1 text-dark"></span></li></a>';

for ($i = 0; $i < $total_items; $i++) {
    echo '			<a data-toggle="modal" data-target="#' . strtr(strtolower(str_replace('-', '', (str_replace(' ', '', $mainCategories[$i])))), $unwanted_array) . '" data-dismiss="modal"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">' . $mainCategories[$i] . '</h5><span class="fa fa-chevron-right pull-right mt-1"></span></li></a>';
}
    echo '		    <a href="../includes/category.php';if(isset($_SESSION['login']))
						echo '?login=1';
						echo '"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">Kategóriák</h5><span class="fa fa-chevron-circle-right pull-right mt-1 text-dark"></span></li></a>
					<a href="../includes/aboutus.php';
						if(isset($_SESSION['login']))
						echo '?login=1';
						echo '"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">Rólunk</h5><span class="fa fa-chevron-circle-right pull-right mt-1 text-dark"></span></li></a>
					<a href="../includes/contact.php';
						if(isset($_SESSION['login']))
						echo '?login=1';
						echo '"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">Kapcsolat</h5><span class="fa fa-chevron-circle-right pull-right mt-1 text-dark"></span></li></a>';
	if(isset($_SESSION['login']))
		echo '		<a href="../index.php?login=0"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0"><span class="fa fa-power-off"></span>&nbsp;&nbsp;Kijelentkezés</h5></li></a>';

echo '				
				
				</ul>
			</div>
		</div>
	</div>
</div>';

for ($i = 0; $i < $total_items; $i++) {
    echo '
<!-- ' . strtr(strtolower(str_replace('-', '', (str_replace(' ', '', $mainCategories[$i])))), $unwanted_array) . ' -->
<div class="modal fade modal-right p-0" id="' . strtr(strtolower(str_replace('-', '', (str_replace(' ', '', $mainCategories[$i])))), $unwanted_array) . '" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height w-85">
		<div class="modal-content rounded-0 full-height LavenderBlush">
			<div class="modal-header rounded-0 btn-info-color">
				<a class="text-light" data-dismiss="modal" data-toggle="modal" data-target="#menuModal"><h3 class="modal-title">Vissza</h3></a>
			</div>
			<div class="LavenderBlush p-0">
				<ul class="list-group rounded-0">
';
    foreach($json[$mainCategories[$i]] as $key => $value) {
        
    
	if(isset($_SESSION['login']))
	    echo '		<a href="../includes/search.php?login=1"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">' . $value . '</h5><span class="fa fa-chevron-circle-right pull-right mt-1 text-dark"></span></li></a>';
	else
		echo '		<a href="../includes/search.php"><li class="list-group-item LavenderBlush"><h5 class="text-dark inline-block m-0">' . $value . '</h5><span class="fa fa-chevron-circle-right pull-right mt-1 text-dark"></span></li></a>';
					
    }
    echo '
				</ul>
			</div>
		</div>
	</div>
</div>';
}

?>
