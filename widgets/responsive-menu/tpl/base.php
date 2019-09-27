<button class="toggle-menu" data-toggle="toggle-menu" data-target="#<?php echo$instance['some_selection']?>"><span>MENU</span></button>
<?php
    $arg = array(
        'menu' => $instance['some_selection'],
        'container' => 'nav',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => $instance['some_selection'],
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul id="%1$s" class="menu %2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => ''

    );
    wp_nav_menu( $arg );
?>
