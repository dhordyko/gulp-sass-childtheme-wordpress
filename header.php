<!doctype html>
<html <?php language_attributes(); ?> class="<?php echo bridey_get_theme_option('site_mode') == 'dark' ? esc_attr('site-dark') : ''; ?>">
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="profile" href="//gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Raleway:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<?php
	/**
	 * Functions hooked in to wp_head action
	 *
	 * @see bridey_pingback_header - 1
	 */
	wp_head();

	?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action('bridey_before_site'); ?>

<div id="page" class="hfeed site">
	<?php
	/**
	 * Functions hooked in to bridey_before_header action
	 *
	 * @see bridey_deal_topbar - 5
	 *
	 */
	do_action('bridey_before_header');

	get_template_part('template-parts/header/header', bridey_get_theme_option('header-type', 3));

    get_template_part('template-parts/header', 'sticky');
	
	/**
	 * Functions hooked in to bridey_before_content action
	 *
	 * @see bridey_breadcrumb - 10
	 *
	 */
	do_action('bridey_before_content');
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

<?php
/**
 * Functions hooked in to bridey_content_top action
 *
 * @see bridey_shop_messages - 10 - woo
 */
do_action('bridey_content_top');
