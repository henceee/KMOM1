<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Anax container.
$anax['title'] = "Hence";

$anax['header'] = <<<EOD
<span class='sitetitle'></span>
<span class='siteslogan'></span>
<img class='sitelogo' src='img/me/header.jpg' alt='Logo'/>


EOD;
include_once(__DIR__.'/../src/Cmenu.php');
echo CNavigation::GenerateMenu($menu,'nav');
$anax['main'] = <<<EOD
<h1> Redovisning </h1>
<h2><a href="index.php">KMOM1<a><h2>
EOD;


$anax['footer'] = <<<EOD
<footer>Databaser och Objekt Orienterad PHP, 7.5 hp, Blekinge Tekniska Högskola</footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(ANAX_THEME_PATH);
?>