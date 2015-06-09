<?php
	wp_nav_menu(
		 array(
		 	'theme_location' => 'menu-footer',
		 	'container'       => 'nav',
			'container_class' => 'footer__menu',
			'container_id'    => '',
			'menu_class'      => 'footer__menu__ul',
			'menu_id'         => '',
			'items_wrap'      => '<h4>Menu</h4><ul id="%1$s" class="%2$s">%3$s</ul>',
		 	 )
		

		);
