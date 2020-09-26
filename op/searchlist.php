<?php

echo '
<div class="container">
	';

while($row = $result->fetch_assoc()) {
	echo '<div class="row">
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
</div>';
}

echo '</div>

<!-- pagination -->
<nav>
  <ul class="pagination justify-content-center mt-2">
    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Előző</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link levanderBlushLighter text-info" href="#">2</a></li>
    <li class="page-item"><a class="page-link levanderBlushLighter text-info" href="#">3</a></li>
	<li class="page-item"><a class="page-link levanderBlushLighter text-info" href="#">4</a></li>
	<li class="page-item"><a class="page-link levanderBlushLighter text-info" href="#">5</a></li>
    <li class="page-item"><a class="page-link levanderBlushLighter text-info" href="#">Következő</a></li>
  </ul>
</nav>
<!-- pagination -->

';
?>
