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

<div class="container">
	<h5 class="my-2 text-center display-3">Rólunk</h5>
	<p>Phasellus interdum vitae lacus ac dignissim. Fusce est elit, fermentum id sodales et, scelerisque ac diam. Mauris a aliquam magna. Fusce ex est, hendrerit vel nibh a, fringilla malesuada augue. Pellentesque pretium, massa id lacinia auctor, libero ipsum tempor justo, in consectetur ipsum eros nec dolor. Praesent dictum, risus eget vulputate ullamcorper, dui metus sollicitudin est, ut volutpat nisi quam eget augue. Curabitur nisl magna, tincidunt molestie venenatis sit amet, molestie non sapien. Aenean nec sodales erat. Aenean ultricies dignissim lacus, in sollicitudin dolor bibendum viverra. Etiam volutpat dui non metus ullamcorper finibus. Ut rhoncus velit lacus, at rutrum ipsum tincidunt in. Etiam porttitor ac arcu et commodo. Sed velit velit, feugiat sed pulvinar ultricies, pharetra vitae nulla.</p>
</div>

<?php include 'footer.php';?>

</body>
</html>