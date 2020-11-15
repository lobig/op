<?php

$json = file_get_contents('http://opweb.ddns.net/services/api/get/public/getOneAdvertisementByAdvertisementId.php?AdvertisementId=' . $itemid . '');
$json = json_decode($json, true);

$imageCount = 0;
for ($i = 1; $i < 4; $i++) {
    if ( $json['imageUrl' . $i .''] != -1 ) {
        $imageCount++;
    }
}

echo '
<div class="container">
	<h4 class="m-0 text-center"><div class="text-info mb-2">' . $json['Summary'] . '</div></h4>
</div>
	    
<div class="container">
	<div class="row">
		<div class="col-sm-5 mb-2">
			<div id="carouselExampleIndicators" class="carousel slide rounded" data-ride="carousel">
				<ol class="carousel-indicators">';
                    for ($i = 0; $i < $imageCount; $i++) {
					   echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" '; if ( $i == 0) { echo 'class="active"'; } echo '></li>';
                    }
					echo '</ol>
				<div class="carousel-inner rounded">';
					for ($i = 1; $i < $imageCount+1; $i++) {
					    echo '
					    <div class="carousel-item '; if ( $i == 1) { echo 'active'; } echo '">
					    <a href="" data-toggle="modal" data-target="#galleryModal" class="image-wrapper"><img src="' . $json['imageUrl' . $i .''] . '" class="rounded image" alt="..."></a>
					    </div>';
					}
                    
				echo'	
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
			<h3 class="mb-1 mt-2 LightCoral"><strong>' . $json['Price'] . ' Ft</strong></h3>
			<p class="mb-2 font-weight-light">' . $json['PlaceOfReceipt'] . ' | ' . $json['CreateDate'] . '</p>
			<h5 class="small"><a href="category.php';
        if(isset($_SESSION['login']))
            echo '?login=1';
            echo '" class="text-info"><strong>' . '#kategórianév' . '</strong></a></h5>
			<p class="font-weight-light">' . $json['Description'] . '</p>
			<h5 class=""><strong>Elérhetőségek:</strong></h5>
			<h5 class=""><span class="fa fa-phone mr-2"></span><button id="phonenumberbutton" class="btn btn-info btn-sm line-height-075" style="display: inline-block;"onclick="showPhoneNumber()">Mutat</button><div id="phonenumber" style="display: none;"><a class= "text-info" href="tel:' . $json['Contact1'] . '">' . $json['Contact1'] . '</a></div></h5>
			<h5 class=""><span class="fa fa-envelope-square mr-2"></span><a class= "text-info" href="mailto:' . $json['Contact2'] . '">' . $json['Contact2'] . '</a></h5>
			<h5 class="mb-5"><span class="fa fa-comment mr-2"></span><a class= "text-info" href="https://m.me/' . $json['Contact3'] . '" target="_blank">Üzenek Messengeren</a></h5>
		</div>
	</div>
</div>
			    
<!-- galleryModal -->
<div class="modal fade p-0" id="galleryModal" data-backdrop="true">
	<div class="modal-dialog ml-auto full-height max-width-100">
		<div class="modal-content rounded-0 full-height LavenderBlush">
			<div id="carouselModalExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">';
                    for ($i = 0; $i < $imageCount; $i++) {
					   echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" '; if ( $i == 0) { echo 'class="active"'; } echo '></li>';
                    }
					echo '</ol>
				<div class="carousel-inner">';
					for ($i = 1; $i < $imageCount+1; $i++) {
					    echo '
					    <div class="carousel-item '; if ( $i == 1) { echo 'active'; } echo '">
					    <img src="' . $json['imageUrl' . $i .''] . '" class="d-block vh-100 vw-100 object-fit-contain" alt="...">
					    </div>';
					}
                    
				echo'
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
				
echo '
<script type="text/javascript">
    checkCookie(' . $itemid . ');
    
</script>
';

?>