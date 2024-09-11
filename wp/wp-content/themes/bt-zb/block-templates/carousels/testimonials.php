<?php
// Testimonial fields
$title = get_field( 'title' );

// Testimonial Query:
$args = array(
	'post_type' => 'testimonial',
	'posts_per_page' => -1,
	'meta_query' => array(
		array(
			'key' => 'show',
			'value' => '1',
		)
	)
);
$testimonial_query = new WP_Query( $args );

$has_slides = $testimonial_query->have_posts();

?>

<section id="testimonials" data-test="<?php echo $has_slides; ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title text-center">
                    <h2><?php echo( $title ); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-carousel">
                <?php
                if( $has_slides ):
                    // Loop through the Testimonial Posts
                    $count = 0;
                    while( $testimonial_query->have_posts() ) :
                        $testimonial_query->the_post();
                        $post_id = get_the_ID();
                        $active_class = ( $count == 0 ) ? 'active' : '';
                        $testimonial_body = get_field( 'content', $post_id ) ?: '';
                        $testimonial_author = get_field( 'author', $post_id ) ?: '';
                        ?>
                        <div class="testimonial px-lg-5 <?php echo $active_class ?>">
                            <div class="row content-outer px-lg-5 py-2">
                                <div class="content w-100">
                                    <p>
                                        <?php echo $testimonial_body; ?>
                                    </p>
                                </div>
                                <div class="name w-100">
                                    <span><?php echo $testimonial_author; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                            $count++;
                        endwhile;

                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>