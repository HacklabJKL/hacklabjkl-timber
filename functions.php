<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Don't log deprecations in development cause of PHP8.2
if (getenv('SERVER_NAME') == 'jkl.hacklab.test') {
        error_reporting(E_ALL ^ E_DEPRECATED);
}

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();
