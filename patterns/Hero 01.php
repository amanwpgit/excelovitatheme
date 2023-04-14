<?php
/**
 * Title: Hero 01
 * Slug: excelovita-hero-01
 * Categories: Hero
 * Keywords: hero
 * Inserter: yes
 */

$img = get_images_from_excelovita();



 ?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri("assets/images/img_bg2.png") ); ?>","id":395,"dimRatio":80,"overlayColor":"primary","minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-395" alt="" src="<?php echo esc_url( get_theme_file_uri("assets/images/img_bg2.png") ); ?>"  data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|30","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Excelovita Themes & Patterns', 'excelovita-wp' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'Best way to build a website', 'excelovita-wp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color"><?php esc_html_e( 'We have simplified the way you build your website. Use patterns to quickly add pre designed section or full-page.', 'excelovita-wp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button"><?php esc_html_e( 'Start Here', 'excelovita-wp' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"base","textColor":"primary","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Learn More', 'excelovita-wp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->