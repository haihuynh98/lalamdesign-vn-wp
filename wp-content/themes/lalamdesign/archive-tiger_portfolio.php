<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lalamdesign
 */

get_header();
?>

    <main id="primary" class="site-main">

        <div>
            <div class="boxtitle_detail"
                 style="background-image: url('https://lalamdesign.vn/images/banner-project.jpg');">
                <div class="title-project " style="">
                    <h1 class="font-weight-bold " style="color:#80775F;">Tất cả dự án</h1>
                </div>
            </div>

        </div>

        <main class="container-fluid">
            <div class="text-center menu-filter my-3">
                <a href="/project" class="btn active" style="color: #565040">Tất cả</a>
                <a href="/project?slug=spa" class="btn" style="color: #565040"> SPA</a>
                <a href="/project?slug=coffee-shop" class="btn" style="color: #565040"> Coffee Shop</a>
                <a href="/project?slug=can-ho" class="btn" style="color: #565040"> Căn hộ</a>
                <a href="/project?slug=homestay" class="btn" style="color: #565040"> Homestay</a>
                <a href="/project?slug=nha-pho" class="btn" style="color: #565040"> Nhà phố</a>
                <a href="/project?slug=nha-hang" class="btn" style="color: #565040"> Nhà hàng</a>
                <a href="/project?slug=biet-thu" class="btn" style="color: #565040"> Biệt thự</a>

            </div>


            <!-- Portfolio Gallery Grid -->
            <div id="image_grid">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>
                        <div class="project-item "
                             style="width: 100%;height: auto !important;margin-bottom: 10px; position: relative;">
                            <a href="/project/detail/10">
                                <img src="/uploads/Asset%207-HAKAKA-HAWAI.jpg" alt="Mountains" style="width:100%">
                                <div class="title">
                                    <h4>Biệt thự HAKAKA KAWAI</h4>
                                    <p>TP. Hồ Chí Minh</p>
                                </div>
                            </a>
                        </div>
					<?php
					endwhile;
				endif; ?>

            </div>
            <div style="clear: left;"></div>

        </main>

    </main><!-- #main -->

<?php
get_footer();
