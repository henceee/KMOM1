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
echo CNavigation::GenerateMenu($menu,'nav',true);
$anax['main'] = <<<EOD
<h1>Om mig:</h1>
<p>Henric heter jag, men brukar kallas för Hence, vilket är en variation på Henke.Är en ganska tystlåten, begrundande, skäggig 24-årig kille, ifrån Kristianstad i Nordöstra Skåne. Bor sen ett år tillbaks i Kalmar, där jag pluggar Webbprogrammering på Linnéuniversitet. Studerar Databaser och Objektorienterad PHP som kompliment på BTH.<br/><br/>

Jag är ganska politiskt intresserad men är inte med i något ungdomsförbud för närvarande. Har dock har deltagit på en del demontrationer och umgåtts med politiska människor. <br><br>

Musik är min passion, framförallt punk  rock, hårdrock och typ alla subgenres av metal.
</p>
<img class="img" src="img/programming.jpg"><img class="img" src="img/metal.jpg"><br />
<p>
Jag är introvert och tycker om att bara vara hemma och se film och serier men festar ibland med de människor jag känner mig bekväm med. Har dock börjat komma ur mitt skal rejält, då min levnadssituation tvingat mig att bli mer social och tycker inte det är det minsta obekvämt längre. Jag bor nämligen i korridor, där man tvingas umgås med andra
vilket har varit bra för mig, har fått massvis med nya vänner från massor av olika länder. Jag stortrivs, helt enkelt.<br><br>
Tycker även om naturen, men kommer aldrig ut i naturen längre,vilket är synd. En lång promenad i skogen eller över öppna landskap är som terapi.</p> 

<p>Vad mer kan man tillägga om mig? Jag har en syster som är två år yngre än mig som studerar juridik i Edinburgh för närvarande, utöver det har jag bara mor och far och såklart alla kusiner. Har tio kusiner, och tre stycken sysslingar, men dem träffar jag sällan. Jag håller människor på avstånd på gott och ont, men jag trivs så. Jag har inte mycket gemensamt med dem, utöver blodsband.</p>
EOD;


$anax['footer'] = <<<EOD
<footer>Databaser och Objekt Orienterad PHP, 7.5 hp, Blekinge Tekniska Högskola</footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(ANAX_THEME_PATH);
?>