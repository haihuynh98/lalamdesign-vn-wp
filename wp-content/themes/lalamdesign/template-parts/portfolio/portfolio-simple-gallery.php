<?php
$_init_portfolios  = [1,2,3,4,5,6,7,8,9,10,11,12];
?>

<?php

foreach ($_init_portfolios as $k_portfolio => $portfolio) {
    echo '<div class="col-lg-3 col-sm-6  my-sm-3 wow fadeIn  center">';
    echo get_template_part('template-parts/portfolio/item/flip-card');
    echo '</div>';
}
?>
