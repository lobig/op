<?php
session_start();  
$_SESSION['login']=$_GET['login'];
if ($_SESSION['login'] == 0) {
	unset($_SESSION['login']); 
}

?>

<!DOCTYPE html>
<html lang="hu">

<?php include 'includes/htmlhead.php';?>

<body>

<?php include 'includes/header.php';?>

<div class="container">
	<h5 class="mb-2 mt-3 text-center">Legfrissebb hirdetések</h5>
</div>

<?php include 'includes/searchlist.php';?>

<?php include 'includes/footer.php';?>

<?php include 'includes/toastcookie.php';?>

</body>
</html>