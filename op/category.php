<?php
	session_start();  
	$_SESSION['login']=$_GET['login'];
	if ($_SESSION['login'] == 0) {
		unset($_SESSION['login']); 
	}
?>

<!DOCTYPE html>
<html lang="hu">

<?php include 'htmlhead.php';?>

<body>

<?php include 'header.php';?>

<?php include 'breadcrumb.php';?>

<!-- title -->
<div class="container">
	<h3 class="my-2 text-center">Kategóriák</h3>
</div>
<!-- title -->

<?php include 'categorylist.php';?>

<?php include 'footer.php';?>

</body>
</html>