<?php

 

$callingURL = strtolower($_SERVER['http://openurban.net']); //the requesting url

        

if ( strpos( $callingURL, 'http://en.openurban.net/mediawiki') ) {

        require_once('en_LocalSettings.php');    

}

else if ( strpos( $callingURL, 'http://tr.openurban.net/mediawiki') ) {

        require_once('tr_LocalSettings.php' );    

}

 

?>