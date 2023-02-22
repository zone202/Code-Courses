<?php

/**
 * Template Name: Front Page
 */

get_header(); ?>

<header class="main-header pt-5 pb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="front-text col-lg-6 col-md-6">
                <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
                    <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
                <?php endif; ?>
                <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg> Sign-up to Get Started
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
                    <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<section class="features pt-3 pb-3 mt-3">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_one_image'); ?>" alt="Some Featured Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_one_text'); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_two_image'); ?>" alt="Some Featured Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_two_text'); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <img class="img-fluid" src="<?php echo the_field('feature_three_image'); ?>" alt="Some Featured Text">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <?php echo the_field('feature_three_text'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="course_cat border-top pt-3 pb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if ( is_active_sidebar( 'course_cat_text' ) ) : ?>
                        <?php dynamic_sidebar( 'course_cat_text' ); ?>
                    <?php endif; ?>
                    <a data-bs-toggle="modal" data-bs-target="#signupModal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> Sign-up to Get Started
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/HTML/" class="card text-decoration-none text-dark text-center mb-3">
                    <img class="front-picture" src="<?php echo get_template_directory_uri(); ?>\img\sta-je-html.jpg" alt="HTML Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">HTML Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/CSS/" class="card text-decoration-none text-dark text-center mb-3">
                    <img class="front-picture" src="<?php echo get_template_directory_uri(); ?>\img\sta-je-css.png" alt="Short Term Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">CSS Term Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/Javascript/" class="card text-decoration-none text-dark text-center mb-3">
                    <img class="front-picture" src="<?php echo get_template_directory_uri(); ?>\img\javascript-course-img.jpg" alt="Certification Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Javascript Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/React/" class="card text-decoration-none text-dark text-center mb-3">
                    <img class="front-picture" src="<?php echo get_template_directory_uri(); ?>\img\maxresdefault.jpg" alt="Online Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">React Courses</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>