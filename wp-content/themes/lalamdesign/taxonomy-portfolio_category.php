<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lalamdesign
 */

get_header();

$term      = get_queried_object();
$term_name = $term->name;
?>
    <main id="primary" class="site-main">

        <div>
            <div class="boxtitle_detail"
                 style="background-image: url('https://lalamdesign.vn/images/banner-project.jpg');">
                <div class="title-project " style="">
                    <h1 class="font-weight-bold " style="color:#fff5dc;"><?php echo $term_name; ?></h1>
                </div>
            </div>

        </div>

        <main class="container-fluid my-3">
			<?php get_template_part( 'template-parts/nav/nav', 'portfolio-category' ) ?>

			<?php if ( have_posts() ) : ?>

                <!-- Portfolio Gallery Grid -->
                <div id="image_grid">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>
                        <div class="project-item "
                             style="width: 100%;height: auto !important;margin-bottom: 10px; position: relative;">
                            <a href="<?php echo get_the_permalink() ?>">
                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>"
                                     alt="<?php echo get_the_title(); ?>" style="width:100%">
                                <div class="title">
                                    <h4><?php echo get_the_title(); ?></h4>
                                    <p><?php echo get_field( 'address', get_the_ID() ) ?></p>
                                </div>
                            </a>
                        </div>
					<?php
					endwhile; ?>
                </div>
			<?php else: ?>
                <div class="container">
                    <p class="text-center">Các dự án của chúng tôi đang được cập nhật.</p>
                </div>
			<?php endif; ?>
            <div style="clear: left;"></div>

        </main>

    </main><!-- #main -->

<?php
get_footer();
