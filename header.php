<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sumaira-babycare-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap"
        rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <header id="header" class="site-header">


        <!-- Spinner Start -->
        <div id="spinner"
            class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navigation start -->
        <div class="container-fluid border-bottom bg-light wow fadeIn" data-wow-delay="0.1s">
            <div class="container topbar bg-primary d-none d-lg-block py-2" style="border-radius: 0 40px">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fa-solid fa-phone-volume text-secondary"></i> <a href="#"
                                class="text-white">123
                                Street, Karachi Pakistan</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                                class="text-white">sumairajabeen26@gmail.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <?php if ( have_rows( 'Header_social_media', 'option' ) ) : ?>
                        <?php while ( have_rows( 'Header_social_media', 'option' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'social_url' ); ?>" target="_blank"
                            class=" twitter btn btn-light btn-sm-square rounded-circle text-secondary "><?php the_sub_field( 'social_icon' ); ?></a>



                        <?php endwhile; ?>
                        <?php else : ?>
                        <?php // no rows found 
						echo 'please <a href=" '.home_url().'/wp-admin/admin.php?page=theme-general-settings ">add </a> social media';
						?>
                        <?php endif; ?>




                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl py-3">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary display-6">Baby<span class="text-secondary">Care</span></h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <?php 
							wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
	
   'menu_class'      => 'navbar-nav mr-auto',
    
    
    
    
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );
							?>
                            <div class="d-flex me-4">
                                <div id="phone-tada" class="d-flex align-items-center justify-content-center">
                                    <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa-solid fa-phone text-secondary fa-2x me-4 "></i>
                                        <div class="position-absolute" style="top: -7px; left: 20px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column pe-3 border-end border-primary">
                                    <span class="text-primary">Have any questions?</span>
                                    <a href="#"><span class="text-secondary">Free: +923132228555</span></a>
                                </div>
                            </div>
                            <button class="btn-search btn btn-primary btn-md-square rounded-circle"
                                data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                    class="fas fa-search text-white"></i></button>
                        </div>
                </nav>
            </div>
        </div>
        <!-- Navigation End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords"
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7 col-md-12">
                        <?php $website_title= get_field( 'Header_website_title', 'option' ); 
						if($website_title){ ?>
                        <h1 class="mb-3 text-primary">
                            <?php
							echo $website_title; ?>
                        </h1>

                        <?php }else{
							echo 'please <a href=" '.home_url().'/wp-admin/admin.php?page=theme-general-settings ">add </a>website title';
						}
						?>
                        <h1 class="mb-5 display-1 text-white">
                            <?php the_field( 'Header_website_description', 'option' ); ?></h1>
                        <a href="" class="btn btn-primary px-4 py-3 px-md-5  me-4 btn-border-radius">Get Started</a>
                        <a href="" class="btn btn-primary px-4 py-3 px-md-5 btn-border-radius">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

    </header><!-- #header -->