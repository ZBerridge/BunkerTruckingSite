<?php
// Template for Brookfield Well Repair main nav

$logo = get_field( 'site_logo', 'option');
?>
<nav class="navbar navbar-expand-lg navbar-dark" id="main-nav">
  <div class="container nav-lg-logo d-none d-lg-flex justify-content-center">
    <a class="navbar-brand" style="font-size: 0px;" href="#">Brookfield Well Repair<img class="img-fluid" src="<?php echo wp_get_attachment_image_url( $logo, 'medium' ); ?>" alt="Brookfield Well Repair Logo"/></a>
  </div>
  <div class="container pt-lg-2">
    <a class="navbar-brand nav-logo d-block d-lg-none" style="font-size: 0px;" href="#">Brookfield Well Repair<img class="img-fluid" src="/frontend/src/assets/Logo-White.png"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="navbar-toggler-icon hamburger-icon">
          <span class="bar bar1"></span>
          <span class="bar bar2"></span>
          <span class="bar bar3"></span>
          <span class="bar bar4"></span>
      </div>
    </button>
	  <?php
	  wp_nav_menu( array(
		  'theme_location'  => 'main-menu',
		  'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
		  'container'       => 'div',
		  'container_class' => 'collapse navbar-collapse',
		  'container_id'    => 'navbarSupportedContent',
		  'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
		  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		  'walker'          => new ZB_MainNav_Walker(),
	  ) );
	  ?>
  </div>
</nav>