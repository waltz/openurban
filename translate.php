<?php
function translate($english,$turkish)
{
if ( $wgLanguageCode == "en")  {$menuitem = $english;} else {$menuitem = $turkish;}
return $menuitem;
}

echo translate('Map','Harita');
?>