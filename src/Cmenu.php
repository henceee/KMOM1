<?php

$menu = array(
  'home'  => array('text'=>'Hem',			'url'=> 'index.php'),
  'away'  => array('text'=>'Redovisning',	'url'=> 'presentation.php'),
  'about' => array('text'=>'Källkod',		'url'=> '../sourcecode.php'),
); 


class CNavigation {
  public static function GenerateMenu($items,$class,$isOOP=false) {
    $html = "<nav class='$class'>\n";
    foreach($items as $item) {
      $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};



?>