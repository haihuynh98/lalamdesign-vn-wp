<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lalamdesign
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
        <div style="background-color: #FFFFFF;background-size: cover;background-repeat: no-repeat;background-attachment: fixed; position: relative;margin-top: 10px;">
            <div class="text-center" style="background-color: rgba(0,0,0,.5); padding:  20px 0px;">
                <h1 class="text-uppercase font-weight-bold text-white  wow flipInX">Đặt Lịch hẹn ngay hôm nay</h1>
                <h2 class="text-white  wow flipInX">+84 666 7678</h2>
                <a href="/contact" class="btn btn-primary font-weight-bold  wow flipInX" style="font-size: 20px">Book Now</a>
            </div>

        </div>
	</main><!-- #main -->

<?php
get_footer();
