<?php
# This file was automatically generated by the MediaWiki 1.18.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
ini_set('display_errors', '0');
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;
###$wgReadOnly = 'This wiki is currently being upgraded to a newer software version.';
$wgSitename      = "OpenUrban";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
###$wgScriptPath       = "";
###$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
###$wgServer           = "http://openurban.com";

## The relative URL path to the skins directory
###$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
###$wgLogo             = "{$wgScriptPath}/images/openurban_mw_logo.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "info@openurban.net";
$wgPasswordSender   = "info@openurban.net";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "openur5_new";
$wgDBuser           = "openur5";
$wgDBpassword       = "OU12Inmotion";

# MySQL specific settings
$wgDBprefix         = "wi";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
###$wgLanguageCode = "en";

$wgSecretKey = "7b5a675e052b3be19f6d247402ed13ec2e4b96bb7c57bfea0121604af6e1d036";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "c1359f4579687b05";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "openurbane";
$wgFavicon = "/favicon.ico";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );

## multi language stuff ##
$updatekey = 0;
if ($updatekey == 0){
switch ($_SERVER["SERVER_NAME"])
        { 
                case "nl.openurban.com":
                        require_once "LocalSettings_NL.php";
                        break;
 
                case "tr.openurban.net":
                        require_once "LocalSettings_TR.php";
                        break;
 
                case "tr.openurban.com":
                        require_once "LocalSettings_TR.php";
                        break;
						
                case "openurban.net":
                        require_once "LocalSettings_EN.php";
                        break;
 
                case "openurban.com":
                        require_once "LocalSettings_EN.php";
                        break;

				default:
                        require_once "LocalSettings_EN.php";
                        break;
                        /* echo($_SERVER["SERVER_NAME"] + " zzz This wiki is not available. Check configuration."); */
                        /* exit(0); */
        }
}

## Security Settings
# anon user
$wgGroupPermissions['*']['edit'] 		= false;
$wgGroupPermissions['*']['createpage'] 	= false;
$wgGroupPermissions['*']['createtalk'] 	= false;

# loggedin user
#$wgGroupPermissions['user']['edit']		= true;

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/ConfirmEdit/FancyCaptcha.php" );
$wgCaptchaClass = 'FancyCaptcha';
$wgCaptchaDirectory = "/home/openur5/public_html/extensions/ConfirmEdit/images";
$wgCaptchaDirectoryLevels = 0; // Set this to a value greater than zero to break the images into subdirectories
$wgCaptchaSecret = "OpenUrban"; // same value you used in --key option in captcha.py

require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/Validator/Validator.php" ); # Validator must be included *before* Maps.
include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" ); # Semantic Mediawiki must be included *before* Maps.
enableSemantics('example.org');
include_once("$IP/extensions/SemanticForms/SemanticForms.php"); # Semantic Forms must be included *before* Maps.

## SMW 1.8
##comment out after running the 3 cron jobs 
$smwgDefaultStore = 'SMWSQLStore2';
$wgGroupPermissions['*']['viewedittab'] = false;

$smwgLinksInValues = true;

require_once( "$IP/extensions/Maps/Maps.php" ); # Maps must be included *before* Semantic Maps
require_once( "$IP/extensions/SemanticMaps/SemanticMaps.php" );

require_once( $IP.'/extensions/W4gRatingBar/w4g_rb.php');
$wgW4GRB_Path='/extensions/W4gRatingBar';
require_once("$IP/extensions/RSS/RSS.php");
require_once("$IP/extensions/Comments/Comment.php");
require_once("$IP/extensions/Widgets/Widgets.php");
$wgGroupPermissions['sysop']['editwidgets'] = true;
require_once("$IP/extensions/SemanticResultFormats/SemanticResultFormats.php");

require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
$wgPFEnableStringFunctions = true;
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
// reference extension
require_once("$IP/extensions/Cite/Cite.php");

require_once( "$IP/extensions/UserMerge/UserMerge.php" );
// By default nobody can use this function, enable for bureaucrat?
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
#$wgGroupPermissions['sysop']['userrights']  = true;

$wgUseAjax = true; # category tree extension
require_once("$IP/extensions/CategoryTree/CategoryTree.php");
$wgEnableMWSuggest = true;
include_once("$IP/extensions/SemanticDrilldown/SemanticDrilldown.php");
$sdgFiltersSmallestFontSize=16;
$sdgFiltersLargestFontSize=20;
include_once("$IP/extensions/SemanticCompoundQueries/SemanticCompoundQueries.php");
require_once( "$IP/extensions/MagicNoCache/MagicNoCache.php" );
#$wgShowExceptionDetails = true;
$smwgQDefaultLimit = 100;
require_once ("$IP/extensions/Tabber/Tabber.php");
require_once("$IP/extensions/HeaderTabs/HeaderTabs.php");
