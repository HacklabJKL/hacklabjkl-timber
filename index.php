<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context          = Timber::context();

$news_query_args = [
	'post_type'	=> 'post',
	'category_name' => 'projekti,kerhoilta,tapahtuma,yhdistys',
];
$context['news'] = Timber::get_posts($news_query_args);

$posts_query_args = [
	'post_type'	=> 'post',
	'category_name' => 'projekti,kerhoilta,tapahtuma,yhdistys',
];
$context['posts'] = Timber::get_posts($posts_query_args);


$templates        = array( 'index.twig' );

// WP template hierarchy boilerplate code
if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}

// For HacklabJKL site index.twig template is simply used, for more info read:
// https://timber.github.io/docs/v2/getting-started/template-inheritance-and-includes/
// https://developer.wordpress.org/themes/functionality/custom-front-page-templates/

Timber::render( $templates, $context );
