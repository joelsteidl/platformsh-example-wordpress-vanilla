# WordPress template for Platform.sh

This project provides a starter kit for WordPress projects hosted on Platform.sh. It is primarily an example, although could be used as the starting point for a real project.

## Starting a new project

To start a new project based on this template, follow these 3 simple steps:

1. Clone this repository locally.  You may optionally remove the `origin` remote or remove the `.git` directory and re-init the project if you want a clean history.

2. Create a new project through the Platform.sh user interface and select "Import an existing project" when prompted.

3. Run the provided Git commands to add a Platform.sh remote and push the code to the Platform.sh repository.

That's it!  You now have a working "hello world" level project you can build on.

## Using as a reference

You can also use this repository as a reference for your own projects, and borrow whatever code is needed. The most important parts are the [`.platform.app.yaml`](/.platform.app.yaml) file and the [`.platform`](/.platform) directory.  You will also need the `wp-config.php` and `wp-config-platformsh.php` files that allow WordPress to automatically pick up database credentials from Platform.sh.

Also see:

* [`wp-config.php`](/web/wp-config.php) - The customized `wp-config.php` file works for both Platform.sh and local development, setting only those values that are needed in both.  You can add additional values as desired.  It will then load a `wp-config-local.php` file (which is excluded from Git) to load local development configuration or the `wp-config-platformsh.php` file, which contains Platform.sh-centric configuration.
* [`wp-config-platformsh.php`](/web/wp-config-platformsh.php) - This file contains Platform.sh-specific code to map environment variables into WordPress configuration constants.  You can add to it as needed.

## Local settings

This example looks for an optional `wp-config-local.php` alongside your `wp-config.php` file that you can use to develop locally. This file is ignored in git.

Example `wp-config-local.php`:

```php
<?php

define('WP_HOME', "http://localhost");
define('WP_SITEURL',"http://localhost");
define('DB_NAME', "my_wordpress");
define('DB_USER', "user");
define('DB_PASSWORD', "a strong password");
define('DB_HOST', "127.0.0.1");
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
```
