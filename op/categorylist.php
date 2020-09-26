<?php

$filename = 'categorylist.csv';

// The nested array to hold all the arrays
$the_big_array = []; 

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are semicolon separated
  while (($data = fgetcsv($h, 1000, ";")) !== FALSE) {
    // Each individual array is being pushed into the nested array
    $the_big_array[] = $data;
  }

  // Close the file
  fclose($h);
}

echo '
<div class="container mb-5">';
	
$rows = count($the_big_array);
for ($row = 0; $row < $rows; $row++) {
    $cols = count($the_big_array[$row]);
    $col = 0;
    echo '<div class="card border-radius-null border-none">
			<div class="card-header modal-bg border-radius-null p-0">
			<button class="btn btn-block text-left p-0" type="button" data-toggle="collapse" data-target="#collapse' .$row . '"><h5 class="text-dark my-2">' . $the_big_array[$row][$col]. '</h5></button>
		</div>
		<div id="collapse' .$row . '" class="collapse modal-bg border-bottom-1px">
			<div class="card-body levanderBlushLighter border-radius-null py-0 px-3">';
    $col = 1;
    while($col < $cols) {
        echo '
				<p class="my-1"><a class="text-info" href="">' . $the_big_array[$row][$col] . '</a></p>';
		
        $col++;
    }
echo '</div>
	</div>
</div>';
}

echo '
</div>';

?>