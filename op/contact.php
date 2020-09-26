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
	<h5 class="my-2 text-center display-3">Kapcsolat</h5>
	<p>Sed tincidunt ligula id maximus sagittis. Praesent sed libero vel mi faucibus luctus ut quis odio. Donec nec lectus venenatis ex tempus porta. In non facilisis ex, a sagittis libero. Nam condimentum lacus at tincidunt bibendum. Integer molestie varius nulla id congue. Mauris vel nisi velit. Fusce eu sollicitudin felis. In a aliquet metus. In non lorem in enim varius sagittis. Morbi gravida lobortis nibh sit amet eleifend. Donec ullamcorper, odio ac pharetra placerat, augue quam consectetur nisl, eget pharetra dolor nisl ac nibh. Sed ex metus, efficitur a consectetur at, finibus et sapien. Morbi mauris risus, vestibulum eu commodo ultricies, pretium quis justo.</p>
</div>

<?php include 'footer.php';?>

</body>
</html>