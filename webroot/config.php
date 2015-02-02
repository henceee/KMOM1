<?php
/**
 * Config-file for Anax. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Anax paths.
 *
 */
define('ANAX_INSTALL_PATH', __DIR__ . '/..');
define('ANAX_THEME_PATH', ANAX_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ANAX_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
//session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
//session_start();


/**
 * Create the Anax variable.
 *
 */
$anax = array();


/**
 * Site wide settings.
 *
 */
$anax['lang']         = 'sv';
$anax['title_append'] = ' | Hences Webbtemplate';

$anax['header'] = <<<EOD
<img class='sitelogo' src='img/anax.png' alt='Hence'/>
<span class='sitetitle'>Hences webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$anax['footer'] = <<<EOD
<footer><span class='sitefooter'> </footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$anax['stylesheet'] = 'css/style.css';
$anax['stylesheets'] = array('css/style.css');
$anax['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$anax['modernizr'] = 'js/modernizr.js';
$anax['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$anax['jquery'] = null; // To disable jQuery
$anax['javascript_include'] = array();
//$anax['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$anax['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
