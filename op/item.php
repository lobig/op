<?php

include 'db_conn.php';

$sql = '
SELECT Advertisements.AdvertisementId, Advertisements.Summary, AdvertisementsImages.Image1, AdvertisementsImages.Image2, AdvertisementsImages.Image3, Advertisements.Price, Advertisements.PlaceOfReceipt, Advertisements.CreateDate, Advertisements.Description FROM Advertisements
JOIN AdvertisementsImages
ON AdvertisementsImages.AdvertisementId = Advertisements.AdvertisementId
WHERE Advertisements.AdvertisementId = ' . $itemid
;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo '
<div class="container">
	<h4 class="m-0 text-center"><div class="text-info mb-2">' . $row['Summary'] . '</div></h4>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-5 mb-2">
			<div id="carouselExampleIndicators" class="carousel slide rounded" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner rounded">
					<div class="carousel-item active">
						<a href="" data-toggle="modal" data-target="#galleryModal" class="image-wrapper"><img src="' . $row['Image1'] . '" class="rounded image" alt="..."></a>
					</div>
					<div class="carousel-item">
						<a href="" data-toggle="modal" data-target="#galleryModal" class="image-wrapper"><img src="' . $row['Image2'] . '" class="rounded image" alt="..."></a>
					</div>
					<div class="carousel-item">
						<a href="" data-toggle="modal" data-target="#galleryModal" class="image-wrapper"><img src="' . $row['Image3'] . '" class="rounded image" alt="..."></a>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Előző</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Következő</span>
				</a>
			</div>
		</div>
		<div class="col-sm-7">
			<h3 class="mb-1 mt-2 price-color"><strong>' . $row['Price'] . ' Ft</strong></h3>
			<p class="mb-2 font-weight-light">' . $row['PlaceOfReceipt'] . ' | ' . $row['CreateDate'] . '</p>
			<h5 class="small"><a href="category.php';
			if(isset($_SESSION['login']))
				echo '?login=1';
			echo '" class="text-info"><strong>' . '#kategórianév' . '</strong></a></h5>
			<p class="font-weight-light">' . $row['Description'] . '</p>
			<h5 class=""><strong>Elérhetőségek:</strong></h5>
			<h5 class=""><span class="fa fa-phone mr-2"></span><button id="phonenumberbutton" class="btn btn-info btn-sm line-height-075" style="display: inline-block;"onclick="showPhoneNumber()">Mutat</button><div id="phonenumber" style="display: none;"><a class= "text-info" href="tel:+36304556788">+36304556788</a></div></h5>
			<h5 class=""><span class="fa fa-envelope-square mr-2"></span><a class= "text-info" href="mailto:someone@example.com">footlocker@gmail.com</a></h5>
			<h5 class="mb-5"><span class="fa fa-comment mr-2"></span><a class= "text-info" href="https://m.me/vincze.sandor" target="_blank">Üzenek Messengeren</a></h5>
		</div>
	</div>
</div>

<!-- galleryModal -->
<div class="modal fade p-0" id="galleryModal" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content border-radius-null full-height modal-bg">
			<div id="carouselModalExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselModalExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselModalExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselModalExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href=""><img src="' . $row['Image1'] . '" class="d-block vh-100 vw-100 object-fit-contain" alt="..."></a>
					</div>
					<div class="carousel-item">
						<img src="' . $row['Image2'] . '" class="d-block vh-100 vw-100 object-fit-contain" alt="...">
					</div>
					<div class="carousel-item">
						<img src="' . $row['Image3'] . '" class="d-block vh-100 vw-100 object-fit-contain" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselModalExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Előző</span>
				</a>
				<a class="carousel-control-next" href="#carouselModalExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Következő</span>
				</a>
				<button type="button" class="close text-dark fixed-top-right" data-dismiss="modal"><span aria-hidden="true"><span class="fa fa-times fa-lg"></span></span></button>
			</div>
		</div>
	</div>
</div>
	
';
?>