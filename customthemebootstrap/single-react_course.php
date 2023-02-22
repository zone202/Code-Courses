<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="main-header pt-5 pb-5 border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="course-info col-lg-6 col-md-6 p-2 mb-2">
                <div class="course-excerpt small">
                    <h1 class="fs-5 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <p class="p-1"><span class="badge bg-primary"><strong>Course Fee: </strong><?php echo the_field('course_fee'); ?></span> <span class="badge bg-secondary"><strong>Duration: </strong><?php echo the_field('course_duration'); ?></span></p>

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

<section class="course-description pt-4 pb-4">
    <div class="container">
        <div class="course-display row align-items-center">
        <div class="col-lg-6 col-md-6">
                <?php

                $value = get_field( "course_description_image" );
                if( $value ) { ?>
                    <img class="img-fluid rounded" src="<?php echo $value; ?>" alt="<?php echo get_the_title(); ?>">
                <?php } else { ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                <?php }

                ?>
            </div>
            <div class="col-lg-6 col-md-6 ">
                <div class="course-description small">
                    <h2 class="fs-5 fw-600">Course Description</h2>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-description pt-4 pb-4 ">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
            <div class="course-syllabus small">
                <h2 class="fs-5 fw-600">Course Syllabus</h2>
                <?php echo the_field('course_syllabus');?>
            </div>
        </div>
            <div class="col-lg-6 col-md-6">
                <?php

                $value = get_field( "course_syllabus_image" );
                if( $value ) { ?>
                    <img class="img-fluid rounded" src="<?php echo $value; ?>" alt="<?php echo get_the_title(); ?>">
                <?php } else { ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
                <?php }

                ?>
            </div>

        </div>
    </div>
</section>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>