<section data-section="mainmenu-mobile" class="mainmenu-mobile">
	<div class="mainmenu-mobile__content">

		<nav class="mainmenu">		
			<button class="mobile-toggle">Menu</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>

	</div>

</section>