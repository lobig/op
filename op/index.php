<?php
session_start();  
$_SESSION['login']=$_GET['login'];
if ($_SESSION['login'] == 0) {
	unset($_SESSION['login']); 
}

/*
include 'db_conn.php';

$sql = '
SELECT AdvertisementsImages.Image1, Advertisements.AdvertisementId, Advertisements.Summary, Advertisements.Price, Advertisements.PlaceOfReceipt, Advertisements.CreateDate FROM Advertisements
JOIN AdvertisementsImages
ON AdvertisementsImages.AdvertisementId = Advertisements.AdvertisementId
';
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);
$conn->close();
*/
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