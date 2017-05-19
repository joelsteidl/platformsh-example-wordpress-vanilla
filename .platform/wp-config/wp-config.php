<?php

// You would can create a wp-config-local.php file with local configuration.
// Any constant defined here will be skipped by the Platform.sh configuration.
$file = __DIR__ . '/wp-config-local.php';
if (file_exists($file)) {
  include($file);
}

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

// The Platform.sh configuration file only acts if it's run on Platform.sh,
// and skips any configuration constants that are already defined.
$file = __DIR__ . '/wp-config-platformsh.php';
if (file_exists($file)) {
  include($file);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
