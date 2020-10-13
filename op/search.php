<?php

session_start();  
$_SESSION['login']=$_GET['login'];
if ($_SESSION['login'] == 0) {
	unset($_SESSION['login']); 
}

$searchinput = $_GET['search'];

$num_rows = 30;
	
?>

<!DOCTYPE html>
<html lang="hu">

<?php include 'htmlhead.php';?>

<body>

<?php include 'header.php';?>

<?php
echo '
<div class="container">
	<h3 class="my-2 text-center">Keresés: "' . $searchinput . '"</h3>
	<h3 class="my-2 text-center display-5 inline-block"><strong>' . $num_rows . '</strong> darab találat</h3>
	<button type="button" class="btn inline-block pull-right" data-toggle="modal" data-target="#filterModal"><span class="fa fa-sliders fa-2x"></span></button>
	</div>
</div>';
?>

<?php include 'filtermodal.php';?>	

<?php include 'searchlist.php';?>

<?php include 'footer.php';?>

</body>
</html>