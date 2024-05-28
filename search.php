<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$templates = array( 'search.twig', 'archive.twig', 'index.twig' );

$query = get_search_query();

$context          = Timber::context();
$context['title'] = 'Haku / Search';

// Check if query is empty
if ($query) {
	$context['posts'] = Timber::get_posts();
	$context['query'] = $query;
} else {
	$context['posts'] = [];
}

Timber::render( $templates, $context );
