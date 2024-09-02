<?php while (have_posts()) : the_post(); ?>

	<?php get_template_part('templates/page', 'header'); ?>

	<div class="quotes">

		<div class="flexslider">

			<div class="slides">

				<?php

					$quote_options = array(

						'numberposts' 	=> -1,
						'post_type'		=> 'quote',
						'orderby'		=> 'menu_order',
						'post_status'	=> 'publish',
						'order'			=> 'ASC'

					);

					$quotes = get_posts( $quote_options );

				?>

				<?php foreach ( $quotes as $quote ) : ?>

					<?php

						/* Position */

						$quote_position = get_field( 'quote_position', $quote->ID );

						/* Quote */

						$quote_quote = get_field( 'quote_quote', $quote->ID );

					?>

					<blockquote>

						<p><?php echo $quote_quote; ?></p>

						<div class="source"><?php echo $quote->post_title; ?></div>

						<?php if ( $quote_position ) : ?>

							<div class="position"><?php echo $quote_position; ?></div>

						<?php endif; ?>

					</blockquote>

				<?php endforeach; ?>

			</div>

		</div>

	</div>

<?php endwhile; ?>