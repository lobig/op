<?php
echo '
<!-- pagination -->
<div class="container my-5">
<nav>
  <ul class="pagination justify-content-center">
    <li class="page-item '; if ($prevpage < 1) {
    echo 'disabled';
} echo '"><a class="page-link text-info '; if ($prevpage < 1) {
    echo 'text-muted';
} echo '" href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&page=' . $prevpage . '">Előző</a></li>';
for($j=1;$j<=$total_pages;$j++) {
    echo '<li class="page-item '; if ($j == $page || $j == $_GET['page']) {
        echo 'active';
    } echo '"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&page=' . $j . '">' . $j . '</a></li>';
}
echo '<li class="page-item '; if ($nextpage > $total_pages) {
    echo 'disabled';
} echo '"><a class="page-link text-info '; if ($nextpage > $total_pages) {
    echo 'text-muted';
} echo '" href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&page=' . $nextpage . '">Következő</a></li>
  </ul>
</nav>
</div>
<!-- pagination -->
';
?>