<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-texnik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body>



<header> 
<nav class="navbar navbar-expand-lg navbar-dark fixed-top #880e4f pink darken-4-color scrolling-navbar">
  

</div>
  <a href="#" class="navbar-brand"><img src="<?php echo ot_get_option('logo_upload'); ?>" alt="logo" width="165px" height="85"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle Navigation">
  <span class=" navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="basicExampleNav">
	 <?php
            wp_nav_menu( array(
                'theme_location'  => 'menu-1',
                'menu_id'        => 'primary-menu',
                'depth'           => 2,
                'container'       => false,
                'menu_class'      => 'nav navbar-nav mr-auto smooth-scroll justify-content-center',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
            ) );
            ?>
            <?php get_search_form(); ?>
        </div>
    </nav>

</nav>
<div id="intro" class="view">
 <div class="mask rgba-black-strong">
   <div class="container-fluid d-flex align-items-center justify-content-center h-100">
     <div class="row d-flex justify-content-center text-center">
       <div class="col-md-10">
         <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">
           Шумерлинский Политехнический Техникум
         </h2>
         <hr class="hr-light">
         <h4 class="white-text my-4">
           Добро пожаловать на наш официальный сайт!
         </h4>
         <ul class="smooth-scroll list-unstyled">
  		<li>
        <a href="#primary"><button class="btn btn-outline-white waves-effect waves-light">
           Читать
         </button> </a>
     </li>
 </ul>
       </div>
     </div>
   </div>
 </div>
</div>
</header>



