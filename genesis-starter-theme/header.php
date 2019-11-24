<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?> <!-- Let's wordpress to be in control of the head section-->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


</head>
<body>

<div id="header-area">
    <a id="site_title" href="<?php get_site_url( null, '', null);?>"><?php bloginfo('name')?></a>

    <?php
    wp_nav_menu( array( 
        'theme_location' => 'my-desktop-menu', 
        'container_class' => 'desktop-menu' ) ); 
   
   /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
    wp_nav_menu( array(
      'depth' => 6,
      'sort_column' => 'menu_order',
      'container' => 'ul',
      'menu_id' => 'main-nav',
      'menu_class' => 'nav mobile-menu',
      'theme_location' => 'mobile-menu'
    ) );
    } else {
       echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
}
   ?>

    
 


</div>