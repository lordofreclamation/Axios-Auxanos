<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

/**
 * Log out a user
 */

// Initialisation
require_once('../Includes/init.php');

Auth::getInstance()->logout();

// Redirect to home page
Util::redirect('');

?>
