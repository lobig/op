<?php

session_start();  
$_SESSION['login']=$_GET['login'];
if ($_SESSION['login'] == 0) {
	unset($_SESSION['login']); 
}

$searchinput = $_GET['search'];

if ($searchinput != '') {
	include 'db_conn.php';
	$stmt = $conn->prepare("SELECT AdvertisementsImages.Image1, Advertisements.AdvertisementId, Advertisements.Summary, Advertisements.Price, Advertisements.PlaceOfReceipt, Advertisements.CreateDate FROM Advertisements
	JOIN AdvertisementsImages
	ON AdvertisementsImages.AdvertisementId = Advertisements.AdvertisementId
	WHERE Advertisements.Summary like CONCAT('%',?,'%')");
	$stmt->bind_param('s', $searchinput);
	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	$conn->close();
}	else {
		$num_rows = 0;
	}

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