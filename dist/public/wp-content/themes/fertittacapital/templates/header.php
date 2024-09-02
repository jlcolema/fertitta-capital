<header id="header" role="banner">

	<div class="wrap">

		<div id="logo">

			<a href="<?= esc_url(home_url('/')); ?>">

				<?php bloginfo('name'); ?>

			</a>

		</div>

		<nav id="nav" role="navigation">

			<div class="toggle">

				<span>Nav</span>

			</div>

			<div class="nav-wrapper">

				<?php

					if (has_nav_menu('primary_navigation')) :

						wp_nav_menu([

							'theme_location' => 'primary_navigation',
							'menu_class' => 'nav'

						]);

					endif;

				?>

			</div>

		</nav>

	</div>

</header>