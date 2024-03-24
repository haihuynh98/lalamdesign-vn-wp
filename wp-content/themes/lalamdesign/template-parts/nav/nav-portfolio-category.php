<?php
// Get all terms of the "portfolio_category" taxonomy
$terms = get_terms( array(
	'taxonomy'   => 'portfolio_category',
	'hide_empty' => true,
) );


?>

<?php
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :?>
    <!--Navigation of portfolio-->
    <div class="text-center menu-filter portfolio-nav-bar my-3">
        <a href="/du-an" class="btn active" style="color: #565040">Tất cả</a>
		<?php foreach ( $terms as $term ): ?>
            <a href="<?php echo get_term_link( $term ) ?>" class="btn"
               style="color: #565040"><?php echo $term->name ?></a>
		<?php endforeach; ?>
    </div>
<?php endif; ?>