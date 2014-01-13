<?php

/**
 * Front controller wrapper around Symfony entry points
 *
 * Check environment to see which kernal to spin up
 *
 */

$env = getenv('SYMFONY2_ENV');
if($env === 'development') {
  include_once 'app_dev.php';
}
else {
  include_once 'app.php';
}
