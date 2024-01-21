<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lalamdesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
    <nav class="sticky-top navbar navbar-expand-lg navbar-light container-navbar ">
        <a class="navbar-brand text-logo font-weight-bold " href="/">
            <img src="https://www.lalamdesign.vn/images/only-logo-light.png" alt="" style="height: 38px">
            <img src="https://www.lalamdesign.vn/images/only-title-light.png" alt=""
                 style="height: 38px; margin-left: 7px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav font-menu">
                <li class="nav-item active ">
                    <a class="nav-link text-white text-uppercase" href="/">Trang chủ <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-uppercase" href="/project">Dự án</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-uppercase" href="/contact">Liên hệ</a>
                </li>
            </ul>
        </div>
    </nav>
