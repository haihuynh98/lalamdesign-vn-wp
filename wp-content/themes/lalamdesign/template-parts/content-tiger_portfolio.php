<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lalamdesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <div class="boxtitle_detail"
             style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?>'); filter:blur(3px);"></div>
        <div class="bg-text-title">
			<?php the_title( '<h1 class="text-uppercase">', '</h1>' ); ?>
            <p><?php echo get_field( 'address', get_the_ID() ) ?></p>
        </div>

    </header>

    <div class="container container-sliderproject mt-4">
        <article class="container-detail">
			<?php
			the_content();
			?>
        </article>
    </div>
</article>