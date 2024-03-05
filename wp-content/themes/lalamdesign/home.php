<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lalamdesign
 */

get_header();
?>

    <div id="wrap-slider">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.lalamdesign.vn/images/slide1.jpg" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://www.lalamdesign.vn/images/slide2.jpg" class="d-block" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://www.lalamdesign.vn/images/slide3.jpg" class="d-block" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="line-main-color">
        <div class="container">
            <div class="my-3 py-3  text-center">
                <img class="py-1" src="https://www.lalamdesign.vn/https://www.lalamdesign.vn/images/only-logo.png"
                     alt="" style="width: 100px;display: block ; margin-left: auto;margin-right: auto;">
                <img class="py-1" src="https://www.lalamdesign.vn/https://www.lalamdesign.vn/images/only-title.png"
                     alt="" style="width: 250px;display: block; margin-left: auto;margin-right: auto;">
                <div class="my-3">
                    <h4 class="my-1">Chúng tôi biết bạn cần gì và muốn gì để biến không gian của bạn thật Hoàn Hảo</h4>
                    <h4 class="my-1">LaLam Design - Chuyên tư vấn thiết kế và thi công nội thất nhà ở, căn hộ cao cấp,
                        không gian kinh doanh,...</h4>
                </div>
                <div id="menu_scroll">
                    <a class="btn button-contact  my-1 py-3 px-4 text-uppercase  text-center" href="#contact">Liên hệ
                        ngay</a>
                </div>
            </div>
        </div>
        <hr class="line-main-color">
    </div>

    <div class="container-fluid" style="margin-top: 30px;">
        <div id="project">
            <h3 class="text-uppercase font-weight-bold text-center  "
                style="text-shadow: 2px 2px 3px #918d8d;margin-bottom: 20px; color:  #565040; font-size: 30px">dự án LaLam Design đã thực hiện</h3>
            <!-- item -->
            <div class="row">
                <?php echo get_template_part('template-parts/portfolio/portfolio', 'simple-gallery');?>
            </div>
            <!-- end item -->
        </div>
        <div class="container text-center my-1 py-3">
            <a class="btn button-contact   my-1 py-3 px-4 text-uppercase  text-center" href="/project">Xem tất cả dự
                án</a>
        </div>
    </div>

<?php
get_footer();
