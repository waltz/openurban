<?php
#Extension to allow editors to disable caching on select pages
#by using the magic word __NOCACHE__

# @addtogroup Extensions
# @author Kimon Andreou
# @copyright 2007 Kimon Andreou
# @license GPL General Public License 2.0 or later

 
#Check to see if we're being called as an extension or directly
if ( !defined( 'MEDIAWIKI' ) ) {
        die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}
 
#register ourselves with Special:Version
$wgExtensionCredits['parserhook'][] = array(
  'name' => 'MagicNoCache',
  'url' => 'http://www.mediawiki.org/wiki/Extension:MagicNoCache',
  'author' => 'Kimon Andreou',
  'description' => 'Adds a NOCACHE magic word to disable caching of certain pages.',
  'version' => '1.1'
);
 
#declare var to be used for hooks
$NoCache = new NoCache();
 
#register hooks
$wgHooks['MagicWordMagicWords'][] = array($NoCache, 'addMagicWord');
$wgHooks['MagicWordwgVariableIDs'][] = array($NoCache, 'addMagicWordId');
$wgHooks['LanguageGetMagic'][] = array($NoCache, 'addMagicWordLanguage');
$wgHooks['ParserBeforeTidy'][] = array($NoCache, 'checkForMagicWord');
 
#extension class
class NoCache
{
  #constructor - empty
  function NoCache() {}
 
  #register the new magic word with the system
  function addMagicWord(&$magicWords) {
    $magicWords[] = 'MAG_NOCACHE';
    return true;
  }
 
  #add the id
  function addMagicWordId(&$magicWords) {
    $magicWords[] = 'MAG_NOCACHE';
    return true;
  }
 
  #set the magic word for the various languages - English is default
  #todo: add more languages
  function addMagicWordLanguage(&$magicWords, $langCode) {
    switch($langCode) {
    default:
      $magicWords['MAG_NOCACHE'] = array(0, '__NOCACHE__');
    }
    return true;
  }
 
  #ok, check to see if we have the magic word in the article
  function checkForMagicWord(&$parser, &$text) {
    global $wgOut, $wgAction;
    $mw = MagicWord::get('MAG_NOCACHE');
 
    #If it's there, remove it and disable caching
    if (!in_array($wgAction, array('submit','edit')) && $mw->matchAndRemove($text)) {
      $parser->disableCache();
      $wgOut->enableClientCache(false);
    }
 
    return true;
  }
}