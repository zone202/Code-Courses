<?php

/**
 * Template Name: About Page
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="custom-page-header pt-3 pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading small">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php

                if ( has_post_thumbnail() ) { ?>
                    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                <?php }else{ ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                <?php }

                ?>
            </div>
        </div>
    </div>
</header>

<section class="section-three pt-4 pb-4 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="who-we-are-image">
                    <img class="img-fluid rounded" src="<?php echo the_field('who_we_are_image'); ?>" alt="Who we are">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="who-we-are-text small">
                    <?php echo the_field('who_we_are'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-three pt-4 pb-4 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="what-we-do small">
                    <?php echo the_field('what_we_do'); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="what-we-do-image">
                    <img class="img-fluid rounded" src="<?php echo the_field('what_we_do_image'); ?>" alt="What we do">
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>