<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="author" content="Instituto YDUQS">    
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Instito YDUQS">
    <meta property="og:description" content="Site do Instituto YDUQS.">
    <meta property=”og:url” content=”https://institutoyduqs.com.br” />
    <meta property="og:image" content="https://institutoyduqs.com.br/wp-content/uploads/2022/12/instituto-yduqs.jpg">
	 <meta property="og:image" content="http://c10propaganda.com.br/i_yduqs/wp-content/uploads/2022/12/instituto-yduqs.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta property="og:type" content="website">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php hello_elementor_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content">
	<?php esc_html_e( 'Skip to content', 'hello-elementor' ); ?></a>

<?php
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
		get_template_part( 'template-parts/dynamic-header' );
	} else {
		get_template_part( 'template-parts/header' );
	}
}
