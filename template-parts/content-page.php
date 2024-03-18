<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sumaira-babycare-theme
 */

?>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4">About</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- About Start -->
<div class="container-fluid py-5 about bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="video border">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                <h4 <?php the_field( 'aboutus_title', 'option' ); ?>
                    class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">
                </h4>
                <h1 class="text-dark mb-4 display-5"><?php the_field( 'about_title2', 'option' ); ?></h1>
                <p class="text-dark mb-4"><?php the_field( 'About_description', 'option' ); ?>
                </p>
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <?php if ( have_rows( 'provide_field', 'option' ) ) : ?>
                        <ul class="field_container">

                            <?php while ( have_rows( 'provide_field', 'option' ) ) : the_row(); ?>
                            <li class="list-inline">
                                <h6 class="mb-3  "><i
                                        class="fa-solid fa-circle-check me-2 "></i><?php the_sub_field( 'field_title' ); ?>
                                </h6>
                            </li>

                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                        <?php // no rows found ?>
                        <?php endif; ?>

                    </div>

                    <a href="" class="btn btn-primary px-5 py-3 btn-border-radius">More Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->