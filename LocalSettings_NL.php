<?php
# LocalSettings specifications for nl.openurban.com

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "nl";

$wgSitename      = "Open Urban NL";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://nl.openurban.com";
$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
#$wgServer           = "http://openurban.com";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "{$wgScriptPath}/images/openurban_mw_logo.png";

#$wgDefaultSkin = "openurbane";