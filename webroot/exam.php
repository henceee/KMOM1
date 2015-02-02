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
<img class='sitelogo' src='img/me/header.jpg' alt='Logo'/>

EOD;
include_once('/../src/Cmenu.php');
echo CNavigation::GenerateMenu($menu,'nav');
$anax['main'] = <<<EOD
<h1>Om mig:</h1>
<p>Henric heter jag, men brukar kallas för Hence, vilket är en variation på Henke.Är en ganska tystlåten, begrundande, skäggig 24-årig kille, ifrån Kristianstad i Nordöstra Skåne. Bor sen ett år tillbaks i Kalmar, där jag pluggar Webbprogrammering på Linnéuniversitet. Studerar Databaser och Objektorienterad PHP som kompliment på BTH.<br/><br/>

Jag är ganska politiskt intresserad men är inte med i något ungdomsförbud för närvarande. Har dock har deltagit på en del demontrationer och umgåtts med politiska människor. <br><br>

Musik är min passion, framförallt punk  rock, hårdrock och typ alla subgenres av metal. 

Jag är introvert och tycker om att bara vara hemma och se film och serier men festar ibland med de människor jag känner mig bekväm med. Har dock börjat komma ur mitt skal rejält, då min levnadssituation tvingat mig att bli mer social och tycker inte det är det minsta obekvämt längre. Jag bor nämligen i korridor, där man tvingas umgås med andra
vilket har varit bra för mig, har fått massvis med nya vänner från massor av olika länder. Jag stortrivs, helt enkelt.<br><br>

Tycker även om naturen, men kommer aldrig ut i naturen längre,vilket är synd. En lång promenad i skogen eller över öppna landskap är som terapi.</p> 
EOD;


$anax['footer'] = <<<EOD
<footer>Databaser och Objekt Orienterad PHP, 7.5 hp, Blekinge Tekniska Högskola</footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(ANAX_THEME_PATH);
?>