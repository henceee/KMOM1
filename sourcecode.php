<?php 

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
?>
<!doctype html>
<html lang='en'>
<header>
<meta charset='utf-8' />
<title>Hence | View sourceode</title>
<meta name="robots" content="noindex" />
<meta name="robots" content="noarchive" />
<meta name="robots" content="nofollow" />
<link rel='stylesheet' type='text/css' href='webroot/css/style.css'/>
<header>
<body>
﻿<nav class="nav">
<a href="webroot/index.php">Hem</a>
<a href="webroot/presentation.php">Redovisning</a>
<a href="sourcecode.php">Källkod</a>
</nav>
<div style="margin-left: 134px; margin-top:10px;">
<img class='sitelogo' src='webroot/img/me/header.jpg' alt='Logo'/>
<h1>Källkod</h1>
<p>
Följande källkod finns i katalogen. Klicka för att öppna.
</p>
<?php 

include('src/CSource.php');
$source = new CSource();

echo "<h1>Källkod</h1>\n".$source->View();
 ?>

<div id="footer">Databaser och Objekt Orienterad PHP, 7.5 hp, Blekinge Tekniska Högskola</div>
</div>
</body>
</html>





