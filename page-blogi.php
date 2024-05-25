<?php
$context = Timber::context();

$context['posts'] = Timber::get_posts([
	'post_type'	=> 'post',
	'posts_per_page' => 20,
]);

Timber::render( 'page-blogi.twig', $context );
