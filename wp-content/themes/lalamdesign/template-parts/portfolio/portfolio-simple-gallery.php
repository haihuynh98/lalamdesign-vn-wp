<?php
$args = array(
    'post_type'      => 'tiger_portfolio',
    'posts_per_page' => 12,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        echo '<div class="col-lg-3 col-sm-6  my-sm-3 wow fadeIn  center">';
        echo get_template_part('template-parts/portfolio/item/flip-card');
        echo '</div>';
    }

    wp_reset_postdata(); // Reset post data to the main query
} else {
    // No posts found
    echo 'No tiger portfolio posts found.';
}
?>