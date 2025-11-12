<?php
/**
 * Template part for displaying card slider section
 *
 * @package ink-context-blog
 */

?>

<section class="card-slider-section" data-aos="fade-up" data-aos-mirror="false">
	<div class="container">
		<div class="home-section card-slider-holder">
			<?php
			if ( get_theme_mod( 'context_blog_card_slider_title' ) ) :
				?>
				<h2 class="main-title"><?php echo esc_html( get_theme_mod( 'context_blog_card_slider_title' ) ); ?></h2>
			<?php endif; ?>

			<div class="row">
				<div class="col-lg-12">
					<div class="thumb-block">
						<?php
						$card_slider_args = array(
							'posts_per_page' => get_theme_mod( 'context_blog_card_slider_number', 6 ),
							'orderby'        => 'date',
							'order'          => 'DESC',
						);

						$card_slider_query = new WP_Query( $card_slider_args );

						if ( $card_slider_query->have_posts() ) :
							while ( $card_slider_query->have_posts() ) :
								$card_slider_query->the_post();
								?>
								<div class="card-item">
									<div class="card-image">
										<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail( 'medium' );
										} else {
											echo '<img src="' . esc_url( get_template_directory_uri() . '/images/default-header-image-ink.jpg' ) . '" alt="' . esc_attr( get_the_title() ) . '">';
										}
										?>
									</div>
									<div class="card-content">
										<h3 class="card-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<div class="card-meta">
											<?php
											echo '<span class="card-date">' . esc_html( get_the_date() ) . '</span>';
											?>
										</div>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

