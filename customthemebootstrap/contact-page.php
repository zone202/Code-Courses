<?php

/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="map-holder pb-3">
    <div class="container">
        <div class="row">
            <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30115.800130283955!2d-74.16287302159749!3d41.059237984607186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e14188bf270f%3A0xc5b311e8164621a2!2sRamsey%2C%20NJ%2007446%2C%20USA!5e1!3m2!1sen!2sin!4v1677087010738!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
                    <?php dynamic_sidebar( 'contact_form' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-8 col-md-8">
                <?php

                $table = get_field( 'timing' );

                if ( ! empty ( $table ) ) {
                    echo '<table border="0" class="table border small">';
                        if ( ! empty( $table['caption'] ) ) {
                            echo '<caption>' . $table['caption'] . '</caption>';
                        }
                        if ( ! empty( $table['header'] ) ) {
                            echo '<thead>';
                                echo '<tr>';
                                    foreach ( $table['header'] as $th ) {
                                        echo '<th>';
                                            echo $th['c'];
                                        echo '</th>';
                                    }
                                echo '</tr>';
                            echo '</thead>';
                        }
                        echo '<tbody>';
                            foreach ( $table['body'] as $tr ) {
                                echo '<tr>';
                                    foreach ( $tr as $td ) {
                                        echo '<td>';
                                            echo $td['c'];
                                        echo '</td>';
                                    }
                                echo '</tr>';
                            }
                        echo '</tbody>';
                    echo '</table>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>