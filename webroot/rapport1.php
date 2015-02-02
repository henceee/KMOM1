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
<h1>Redovisning
Kmom01: Kom igång med programmering i PHP<h1>

<h2>Utvecklingsmiljö<h2>
Utvecklingsmiljön är en PC med Windows 7 som operativsystem, där jag installerat XAMPP för att kunna utveckla lokalt innan jag överför till studentservern. För filöverföring till studentservern använder jag FileZilla. Editorn jag använder är tyvärr Notepad ++,  använde Sublime i höstas då jag programmerade lite Javascript och PHP och blev ganska bekväm med den, efter att länge ha använt Visual Studio med studentlicens. Kanske återgår jag till Sublime, planerar att installera det inför nästa moment.

<h2>20 steg för att komma igång PHP</h2>
Studerade PHP i höstas, men arbetade dock inte objektorienterat utan fokuserade på att lära mig grunderna. Därför kändes  dokumentet något redundant, men jag gick igenom det i all hast i alla fall.

<h2>Webbmall</h2>
Valde att behålla mallens struktur i stort, men istället för att ha en liten logotyp med sitetitle och siteslogan tomma, men har kvar behållarna. Ersatte dem med en stor bild. I övrigt gjordes inga större ändringar, utöver att jag fick kommentera bort  de rader i config.php som skapade en ny session, då dessa orsakade varningar som påvisade att headern redan var satt. Skall undersöka vidare vad detta beror på. Mallen fick heta Hence då det är mitt smeknamn och det är min Me-sida, på grund av bristande kreativitet.

<h2>Källkod</h2>
Det fungerade ganska bra med source.php, men det orsakade lite huvudbry dessvärre, då sidan måste vara i rotkatalogen (inte Webroot utan i detta fall den som heter OOP) för att utgå därifrån och därefter utforska alla underkataloger, vad jag förstått. Detta gjorde att jag fick lite bry med Anax-mallen, eller Hence-mallen som det nu blev, då stilmallen inte tycktes fungera. Istället byggde jag upp sidan liknande den i exemplet som bifogades i csource-master och fick genom att länka in stilmallen och med lite css-klurande få sidan att se precis lika dan ut.

<h2>GitHub</h2>
Är van att använda github och har en användare där med repositorier, men i detta fall arbetade jag lokalt, och förde över allt till studentservern. När jag gjort detta korrigerades en del för att applikationen skulle fungera även på servern, såsom den gjort lokalt. Detta hade kunnat undvikas bara jag tänkt lite längre. Har dock skapat ett publikt repositorie på följande adress:
https://github.com/henceee/KMOM1


<h2>Reflektioner</h2>
Underskattade definitivt storleken av uppgiftens storlek och jobbade inte tillräckligt första veckan, då jag ansåg att jag bara hade den dynamiska menyn kvar. Plötsligt blev det väldigt bråttom och detta blev inte bättre av att min farfar gick bort – vilket innebar en oväntad resa till min hemstad för begravning. Jag trodde mig vara färdig, även med källkoden. Dock insåg jag problematiken med att hela katologen inte tycks visas ifall filen inte befinner sig i den ”yttre” katalogen, vilket jag hade mycket huvud bry med i helgen – trots att jag trott mig vara färdig i fredags (31/1). Det var dock intressant och nytt arbetsätt, som är väldigt enkel när man väl har grundstenarna på plats. 

<h2>Länk till min uppgift</h2>
http://www.student.bth.se/~hega15/OOP/webroot/index.php


$anax['footer'] = <<<EOD
<footer>Databaser och Objekt Orienterad PHP, 7.5 hp, Blekinge Tekniska Högskola</footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(ANAX_THEME_PATH);
?>






Reflektioner
Underskattade definitivt storleken av uppgiftens storlek och jobbade inte tillräckligt första veckan, då jag ansåg att jag bara hade den dynamiska menyn kvar. Plötsligt blev det väldigt bråttom och detta blev inte bättre av att min farfar gick bort – vilket innebar en oväntad resa till min hemstad för begravning. Jag trodde mig vara färdig, även med källkoden. Dock insåg jag problematiken med att hela katologen inte tycks visas ifall filen inte befinner sig i den ”yttre” katalogen, vilket jag hade mycket huvud bry med i helgen – trots att jag trott mig vara färdig i fredags (31/1). Det var dock intressant och nytt arbetsätt, som är väldigt enkel när man väl har grundstenarna på plats. 

Länk till min uppfit
http://www.student.bth.se/~hega15/OOP/webroot/index.php
