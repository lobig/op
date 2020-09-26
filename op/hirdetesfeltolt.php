<?php
session_start();  
$_SESSION['login']=$_GET['login'];
if ($_SESSION['login'] == 0) {
	unset($_SESSION['login']); 
}

include 'db_conn.php';

$itemid = $_GET['itemid'];
echo $itemid . '<br>';
if (isset($itemid)) {
  echo '<!DOCTYPE html>
<html lang="hu">';

include 'htmlhead.php';

echo '
<body>';

include 'header.php';

echo '
<div class="container">
	<h5 class="my-2 text-center">Sikeres módosítás</h5>
</div>

<div class="container">
	<div class="row">
			<div class="col-sm">
				<p class="dropdown-divider"></p>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-5">
		<div class="levanderBlushLighter rounded mb-1">
		<a href="product.php?itemid=' . $row['AdvertisementId'];
		if(isset($_SESSION['login']))
			echo '&login=1';
		echo '" class="image-wrapper">';
		echo '<img class="img-fluid rounded image" src="' . $row['Image1'] . '" class="navbar-logo"></a>
		</div>
	</div>
	<div class="col-sm-7">
		<h5 class="m-0">
		<a href="product.php?itemid=' . $row['AdvertisementId'];
		if(isset($_SESSION['login']))
			echo '&login=1';
		echo '" class="text-info">' . $row['Summary'] . '</a></h5>';
		echo '<h4 class="m-0 LightCoral"><strong>' . $row['Price'] . ' Ft</strong></h4>';
		echo '<p class="mb-1 font-weight-light small">' . $row['PlaceOfReceipt'] . ' | ';
		echo $row['CreateDate'] . '</p>
		<h5 class="small"><a href="category.php';
		if(isset($_SESSION['login']))
			echo '?login=1';
		echo '" class="text-info"><strong>' . '#kategórianév' . '</strong></a></h5>
	</div>
	</div>
	
	<a href="moditem.php?itemid=' . $row['AdvertisementId'] . '&login=1" class="text-info text-center"><h5 class="mt-4">Módosítom a hirdetést</h5></a>
	<a href="hirdetes.php?login=1" class="text-info text-center"><h5 class="mt-4">Feladok még egy hirdetést</h5></a>
</div>';

include 'footer.php';

echo '
</body>
</html>';

} else 
	{
//file feltoltes
if(isset($_FILES['image1'])){
	$errors= array();
	$file_name = $_FILES['image1']['name'];
	$file_size = $_FILES['image1']['size'];
	$file_tmp = $_FILES['image1']['tmp_name'];
	$file_type = $_FILES['image1']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));

	$extensions= array('jpeg','jpg','png');

	if(in_array($file_ext,$extensions) === false){
		$errors[]='extension not allowed, please choose a JPEG or PNG file.';
	}

	if($file_size > 2097152) {
		$errors[]='File size must be excately 2 MB';
	}

	if(empty($errors) == true) {
		move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . 'images/' . $file_name);
		echo 'Success<br>';
	}	else {
		print_r($errors);
	}
}

//rekord beszuras Advertisements
$stmt = $conn->prepare("INSERT INTO Advertisements (UserId, CategoryId, Summary, Description, Price, PlaceOfReceipt, CreateDate, LastModificationDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iississs", $UserId, $CategoryId, $Summary, $Description, $Price, $PlaceOfReceipt, $CreateDate, $LastModificationDate);
// set parameters and execute
$UserId = 1;
$CategoryId = $_POST['sub-category-dropdown'];
$Summary = $_POST['summary'];
$Description = $_POST['description'];
$Price = $_POST['price'];
$PlaceOfReceipt = 'Maglód';
$CreateDate = date('Y.m.d H:i:s');
$LastModificationDate = $CreateDate;
$stmt->execute();
$stmt->close();

//a felhasznalohoz tartozo utolso hirdetes ID-ja
$sql = 'SELECT max(AdvertisementId) FROM Advertisements WHERE UserId = 1';
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//rekord beszuras AdvertisementsImages
$stmt = $conn->prepare("INSERT INTO AdvertisementsImages (AdvertisementId, Image1, Image2, Image3, CoverImageNumber) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("isssi", $AdvertisementId, $Image1, $Image2, $Image3, $CoverImageNumber);
$AdvertisementId = $row['max(AdvertisementId)'];
$Image1 = '/images/' . $_FILES['image1']['name'];
$Image2 = '/images/' . $_FILES['image2']['name'];
$Image3 = '/images/' . $_FILES['image3']['name'];
$CoverImageNumber = 1;
$stmt->execute();
$stmt->close();

//most feltoltott hirdetes lekerdezese
$sql = '
SELECT AdvertisementsImages.Image1, Advertisements.AdvertisementId, Advertisements.Summary, Advertisements.Price, Advertisements.PlaceOfReceipt, Advertisements.CreateDate FROM Advertisements
JOIN AdvertisementsImages
ON AdvertisementsImages.AdvertisementId = Advertisements.AdvertisementId
WHERE Advertisements.UserId = 1
AND Advertisements.AdvertisementId =
	(
	SELECT max(Advertisements.AdvertisementId) FROM Advertisements WHERE UserId = 1
	)
';
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();


echo '
<!DOCTYPE html>
<html lang="hu">';

include 'htmlhead.php';

echo '
<body>';

include 'header.php';

echo '
<div class="container">
	<h5 class="my-2 text-center">Sikeres feltöltés</h5>
</div>

<div class="container">
	<div class="row">
			<div class="col-sm">
				<p class="dropdown-divider"></p>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-5">
		<div class="levanderBlushLighter rounded mb-1">
		<a href="product.php?itemid=' . $row['AdvertisementId'];
		if(isset($_SESSION['login']))
			echo '&login=1';
		echo '" class="image-wrapper">';
		echo '<img class="img-fluid rounded image" src="' . $row['Image1'] . '" class="navbar-logo"></a>
		</div>
	</div>
	<div class="col-sm-7">
		<h5 class="m-0">
		<a href="product.php?itemid=' . $row['AdvertisementId'];
		if(isset($_SESSION['login']))
			echo '&login=1';
		echo '" class="text-info">' . $row['Summary'] . '</a></h5>';
		echo '<h4 class="m-0 LightCoral"><strong>' . $row['Price'] . ' Ft</strong></h4>';
		echo '<p class="mb-1 font-weight-light small">' . $row['PlaceOfReceipt'] . ' | ';
		echo $row['CreateDate'] . '</p>
		<h5 class="small"><a href="category.php';
		if(isset($_SESSION['login']))
			echo '?login=1';
		echo '" class="text-info"><strong>' . '#kategórianév' . '</strong></a></h5>
	</div>
	</div>
	
	<a href="moditem.php?itemid=' . $row['AdvertisementId'] . '&login=1" class="text-info text-center"><h5 class="mt-4">Módosítom a hirdetést</h5></a>
	<a href="hirdetes.php?login=1" class="text-info text-center"><h5 class="mt-4">Feladok még egy hirdetést</h5></a>
</div>';
}

include 'footer.php';

echo '
</body>
</html>';
?>