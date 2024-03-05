<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lalamdesign
 */

?>

</div><!-- #page -->


<script>$(document).ready(function () {
        document.getElementById('datePicker').valueAsDate = new Date();
        $('.cropped-images img').each(function () {
            if ($(this).width() > $(this).height()) {
                $(this).addClass('landscape');
            }
        });
    });</script>


<!-- Footer -->

<footer class="pt-5 pb-4 ">

    <div class="container">
        <div class="row">


            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold text-uppercase">Dự án</h5>
                <ul class="f-menu">
                    <li>
                        <a href="/project/category?slug=spa">Mẫu dành cho Spa</a>
                    </li>
                    <li>
                        <a href="/project/category?slug=coffee-shop">Mẫu dành cho quán Coffee</a>
                    </li>
                    <li>
                        <a href="/project/category?slug=biet-thu">Mẫu dành biệt thự</a>
                    </li>
                    <li>
                        <a href="/project/category?slug=homestay">Mẫu dành Homestay</a>
                    </li>
                    <li>
                        <a href="/project">Xem nhiều mẫu hơn</a>
                    </li>
                </ul>
                <h5 class="mb-4 font-weight-bold text-uppercase">Danh mục</h5>
                <ul class="f-menu">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li>
                        <a href="/project">Dự án</a>
                    </li>
                    <li>
                        <a href="/post">Bài viết</a>
                    </li>
                    <li>
                        <a href="/contact">Liên hệ</a>
                    </li>
                    <!-- <li>
                      <a href="/about">Giới thiệu</a>
                    </li> -->
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold text-uppercase">Thông tin liên hệ</h5>
                <ul class="f-address">
                    <!-- <li>
                      <div class="row">
                        <div class="col-1"><i class="fas fa-map-marker"></i></div>
                        <div class="col-10">
                          <h6 class=" mb-0">Address:</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                    </li> -->
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="far fa-envelope"></i></div>
                            <div class="col-10">
                                <h6 class=" mb-0">Bạn có bất kỳ thắc mắc nào?</h6>
                                <p><a href="mailto:lalamdesignstudio@gmail.com?Subject=Tôi cần Lalamdesign tư vấn">lalamdesignstudio@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                            <div class="col-10">
                                <h6 class=" mb-0">Số điện thoại:</h6>
                                <p><a href="tel:+84846667678">+84 (0) 84 666 7678</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <h1 class="font-weight-bold text-white" style="font-size: 15px;">LÀ LAM DESIGN</h1>
                <img src="https://www.lalamdesign.vn/images/only-logo.png" alt="" style="width: 12%;height: 70px">
                <img src="https://www.lalamdesign.vn/images/only-title.png" alt="" style="width: 70%;height: 70px">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">THEO DÕI CHÚNG TÔI</h5>

                <ul class="social-pet mt-4">
                    <li><a href="https://www.facebook.com/lalamdesignstudio" title="facebook"><i
                                    class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/ngoclam154" title="instagram"><i
                                    class="fab fa-instagram"></i></a></li>
                </ul>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous"
                        src="js/sdk.js#xfbml=1&version=v5.0&appId=2540162292936375&autoLogAppEvents=1"></script>
                <div class="fb-page" data-href="https://www.facebook.com/lalamdesignstudio/" data-tabs="0"
                     data-width="" data-height="" data-small-header="false"
                     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/lalamdesignstudio/" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/lalamdesignstudio/">LALAM
                            DESIGN</a></blockquote>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright -->
<section class="copyright">
    <div class="container">
        <div class="row pb-5 pb-md-1">
            <div class="col-md-12 ">
                <div class="text-center text-white">
                    &copy; 2019 owner of LALAMDESIGN - Programmed by HAI HUYNH [DEV]
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="fixed-bottom smartphone">
    <div class="container">
        <div class="row">
            <div class="col-5 p-2 text-center">
                <a href="http://m.me/lalamdesignstudio" class="btn w-100" style="background-color: #50463F">
                    <i class="fab fa-facebook-messenger"></i>
                    <span class="text-uppercase">chat</span>
                </a>
            </div>
            <div class="col-7 p-2 text-center">
                <a href="tel:0846667678" class="btn w-100" style="background-color: #50463F">
                    <i class="fas fa-phone"></i>
                    <span class="text-uppercase">hotline 0846667678</span>
                </a>
            </div>

        </div>
    </div>
</footer>
</div>


<?php wp_footer(); ?>


<script>
    $(document).ready(function () {

        // Add scrollspy to <body>
        $('body').scrollspy({target: ".navbar", offset: 50});

        // Add smooth scrolling on all links inside the navbar
        $("#menu_scroll a").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            }  // End if
        });

    });
</script>

<script>
    window.sr = ScrollReveal();
    sr.reveal('.effect_show');
    sr.reveal('.bar');
</script>
<!-- JS loading effect -->
<script>
    $(document).ready(function () {
        document.getElementById("page").style.display = "block";
        document.getElementById("loading").style.display = "none";
        sr.reveal(document.querySelectorAll('.reveal-fade-in'));
    });
</script>

<script>jQuery(document).ready(function ($) {
        function detectmob() {
            if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                return true;
            } else {
                return false;
            }
        }

        var t = {delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")};
        setTimeout(function () {
            $("div.fb-livechat").fadeIn()
        }, 8 * t.delay);
        if (!detectmob()) {
            $(".ctrlq").on("click", function (e) {
                e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                    bottom: 0,
                    opacity: 0
                }, 2 * t.delay, function () {
                    $(this).hide("slow"), t.button.show()
                })) : t.button.fadeOut("medium", function () {
                    t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)
                })
            })
        }
    });</script>

<!-- JS effect show when Scroll Mouse -->
</body>
</html>
