<?php while (have_posts()) : the_post(); ?>

	<?php get_template_part('templates/page', 'header'); ?>

	<div class="contact-information-group">

		<?php

			gravity_form(

				1, // $id_or_title
				false, // $display_title,
				false, // $display_description
				false, // $display_inactive
				null, // $field_values
				false, // $ajax
				1, // $tabindex
				true // $echo

			);

		?>

		<div class="h-card detailed-h-card">

			<div class="p-name">

				<a href="<?= esc_url(home_url('/')); ?>">

					<?php bloginfo( 'name' ); ?>

				</a>

			</div>

			<div class="p-adr">

				<span class="p-street-address"><?php the_field( 'contact_information_street_address', 'option' ); ?><span class="suite">, Suite <?php the_field( 'contact_information_suite', 'option' ); ?></span>,</span>

				<span class="p-locality"><?php the_field( 'contact_information_city', 'option' ); ?>,</span>

				<span class="p-region"><?php the_field( 'contact_information_state', 'option' ); ?></span>

				<span class="p-postal-code"><?php the_field( 'contact_information_zip_code', 'option' ); ?></span>

			</div>

			<div class="p-tel">+<?php the_field( 'contact_information_phone_number', 'option' ); ?></div>

			<div class="u-email">

				<a href="mailto:c<?php the_field( 'contact_information_email_address', 'option' ); ?>">c<?php the_field( 'contact_information_email_address', 'option' ); ?></a>

			</div>

		</div>

	</div>

<?php endwhile; ?>