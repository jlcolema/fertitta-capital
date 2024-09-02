<footer id="footer" role="contentinfo">

	<div class="wrap">

		<div class="button-large">

			<a href="/partner-with-us/">Partner with Us</a>

		</div>

		<div class="h-card shortened-h-card">

			<div class="p-tel">+<?php the_field( 'contact_information_phone_number', 'option' ); ?></div>

			<div class="u-email">

				<a href="mailto:<?php the_field( 'contact_information_email_address', 'option' ); ?>"><?php the_field( 'contact_information_email_address', 'option' ); ?></a>

			</div>

		</div>

		<p class="copyright"><span><?php bloginfo( 'name' ); ?> &copy; <?php echo date( 'Y' ); ?></p>

	</div>

</footer>