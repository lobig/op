<?php
	session_start();  
	$_SESSION['login']=$_GET['login'];
	if ($_SESSION['login'] == 0) {
		unset($_SESSION['login']); 
	}
	$itemid = $_GET['itemid'];
?>

<!DOCTYPE html>
<html lang="hu">

<?php include 'htmlhead.php';?>

<body>

<?php include 'header.php';?>

<?php include 'breadcrumb.php';?>

<?php include 'item.php';?>

<?php include 'footer.php';?>

</body>
</html>