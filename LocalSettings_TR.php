<?php
# LocalSettings specifications for tr.openurban.net

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "tr";

$wgSitename      = "Acikkent";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://tr.openurban.com";
$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "{$wgScriptPath}/images/openurban_mw_logo.png";

/* Change the main page url used in things like the logo to the url of the turkish mainpage on the wiki */
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'lfChangeMainPageURL';
function lfChangeMainPageURL( $sk, &$tpl ) {
        $tpl->data['nav_urls']['mainpage']['href'] = Title::newFromText('Ana_Sayfa')->getLocalURL(); // Point the main page url to a wiki page's url
        return true;
}

#$wgDefaultSkin = "openurbane";
