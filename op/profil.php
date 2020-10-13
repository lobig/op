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

<!-- title -->
<div class="container">
	<h3 class="my-2 text-center">Profilom</h3>
</div>
<!-- title -->

<div class="container">
	<a href="../index.php?login=0" class="text-info"><h5>Kijelentkezés</h5></a>
	<a href="../includes/hirdetes.php?login=1" class="text-info"><h5>Hirdetés feladás</h5></a>
</div>

<?php include 'footer.php';?>

</body>
</html>