<?php

$json = '
[
{
     "advertisement": {
      "AdvertisementId": "1",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Body",
      "Description": "Body Body Body",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "2",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Kis kád",
      "Description": "Nagyon jó - nem használt! Eskü!",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "3",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Gyerek cipő",
      "Description": "27-es gyerekcipő áron alul eladó",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "3",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Gyerek cipő",
      "Description": "27-es gyerekcipő áron alul eladó",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "3",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Gyerek cipő",
      "Description": "27-es gyerekcipő áron alul eladó",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "3",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Gyerek cipő",
      "Description": "27-es gyerekcipő áron alul eladó",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "3",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Gyerek cipő",
      "Description": "27-es gyerekcipő áron alul eladó",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
},
{
    "advertisement": {
      "AdvertisementId": "3",
      "UserId": "1",
      "CategoryId": "1",
      "Summary": "Gyerek cipő",
      "Description": "27-es gyerekcipő áron alul eladó",
      "State": "1",
      "SubState": "1",
      "AdvertisementType": "1",
      "Tags": "",
      "Price": "500",
      "Quantity": "1",
      "IsFree": "0",
      "PlaceOfReceipt": "Maglód",
      "Conditionz": "használt",
      "CountOfViews": "1",
      "CreateDate": "2020-09-22 08:12:30",
      "LastModificationDate": "2020-09-22 08:12:30"
    }
}
]';

$json = json_decode($json, true);
$page = !isset($_GET['page']) ? 1 : $_GET['page'];
$limit = 5;
$offset = ($page - 1) * $limit;
$total_items = count($json);
$total_pages = ceil($total_items / $limit);
$final = array_splice($json, $offset, $limit); // splice them according to offset and limit

echo 'Összes elem: ' . $total_items . '<br>';
echo 'Oldalak száma: ' . $total_pages . '<br>';

echo '<div class="container">';
for ($i=0; $i<$limit; $i++) {
    $item= $final[$i]['advertisement'];
    echo '
            <div class="row">
                <div class="col-sm">
                    <p class="dropdown-divider"></p>
			    </div>
		    </div>
    		<div class="row">
        		<div class="col-sm-5">
            		<div class="levanderBlushLighter rounded mb-1">
                		<a href="product.php?itemid=' . $item['AdvertisementId'];
    if(isset($_SESSION['login']))
        echo '&login=1';
        echo '" class="image-wrapper">';
        echo '<img class="img-fluid rounded image" src="' . 'images/kad_01.jpg' . '" class="navbar-logo"></a>
        	        </div>
                    </div>
                    <div class="col-sm-7">
                    	<h5 class="m-0">
                    	<a href="product.php?itemid=' . $item['AdvertisementId'];
        if(isset($_SESSION['login']))
            echo '&login=1';
            echo '" class="text-info">' . $item['Summary'] . '</a></h5>';
            echo '<h4 class="m-0 price-color"><strong>' . $item['Price'] . ' Ft</strong></h4>';
            echo '<p class="mb-1 font-weight-light small">' . $item['PlaceOfReceipt'] . ' | ';
            echo $item['CreateDate'] . '</p>
                    	<h5 class="small"><a href="category.php';
            if(isset($_SESSION['login']))
                echo '?login=1';
                echo '" class="text-info"><strong>' . '#kategórianév' . '</strong></a></h5>
                    </div>
            </div>
        </div>';
}
echo '</div>';
echo '
    
<!-- pagination -->
<nav>
  <ul class="pagination justify-content-center mt-2">
    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Előző</a></li>';
for($j=1;$j<=$total_pages;$j++) {
    echo '<li class="page-item active"><a class="page-link" href="test.php?page=' . $j . '">' . $j . '</a></li>';
}
echo '<li class="page-item"><a class="page-link levanderBlushLighter text-info" href="#">Következő</a></li>
  </ul>
</nav>
<!-- pagination -->
    
    
    
    
    
    
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
