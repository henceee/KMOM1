<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Anax container.
$anax['title'] = "Henric Gustafsson";

$anax['header'] = <<<EOD
<span class='sitetitle'></span>
<span class='siteslogan'></span>
EOD;
include_once('/../src/Cmenu.php');
echo CNavigation::GenerateMenu($menu,'nav');
$anax['main'] = <<<EOD

EOD;
include_once('/../src/code.php');

$anax['footer'] = <<<EOD
<footer>Databaser och Objekt Orienterad PHP, 7.5 hp, Blekinge Tekniska Högskola</footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(ANAX_THEME_PATH);
?>