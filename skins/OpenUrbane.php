<?php
/**
 * This is the entry point for GoMediaWiki free skin in green color. This skin
 * is based on MediaWiki's monobook skin. 
 *
 * Copyright (C) 2012 GoMediaWiki
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html 
 * 
 */

if( !defined( 'MEDIAWIKI' ) )
	die( -1 );

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @todo document
 * @ingroup Skins
 */
class SkinOpenUrbane extends SkinTemplate {
	/** Using gmwfreeblue. */
	var $skinname = 'openurbane', $stylename = 'openurbane',
		$template = 'OpenUrbaneTemplate', $useHeadElement = true;

	function setupSkinUserCss( OutputPage $out ) {
		global $wgHandheldStyle,$wgJsMimeType,$wgScriptPath;

		parent::setupSkinUserCss( $out );

		if( $wgHandheldStyle ) {
			// Currently in testing... try 'chick/main.css'
			$out->addStyle( $wgHandheldStyle, 'handheld' );
		}
		$out->addStyle( 'openurbane/960.css', 'screen' );  
		$out->addStyle( 'openurbane/gmw.css', 'screen' );
	}
}

/**
 * @todo document
 * @ingroup Skins
 */
class OpenUrbaneTemplate extends QuickTemplate {
	var $skin;
	/**
	 * Template filter callback for gmwfreeblue skin.
	 * Takes an associative array of data set from a SkinTemplate-based
	 * class, and a wrapper for MediaWiki's localization database, and
	 * outputs a formatted page.
	 *
	 * @access private
	 */
	function execute() {
		global $wgRequest,$wgLogo,$wgScriptPath, $wgUser, $gmwAlwaysShowActionsMenu;
	/** function to insert menu items dependent on languagecode
	 * Jos
	 */
	function translate($english,$turkish)
	{
		global $wgLanguageCode;
		if ( $wgLanguageCode == "en" )  { $menuitem = $english; } else { $menuitem = $turkish; }
		return $menuitem;
	}

		$this->skin = $skin = $this->data['skin'];
		$action = $wgRequest->getText( 'action' );

		// Suppress warnings to prevent notices about missing indexes in $this->data
		wfSuppressWarnings();

		$this->html( 'headelement' );
		
?>
<div class="topBgr">
	<div class="light">
		<div class="userMenuWrapper">
			<div class="container_16">
				<div class="topUserMenu grid_16 portlet" id="p-personal">
					<h5 style="display:none"><?php $this->msg('personaltools') ?></h5>
					<div style="padding-left:225px;">
						<ul<?php $this->html('userlangattributes') ?>>
			<?php 			foreach($this->data['personal_urls'] as $key => $item) { ?>
								<li id="<?php echo Sanitizer::escapeId( "pt-$key" ) ?>"<?php
										if ($item['active']) { ?> class="active"<?php } ?>><a href="<?php
								echo htmlspecialchars($item['href']) ?>"<?php echo $this->tooltipAndAccesskey('pt-'.$key) ?><?php
								if(!empty($item['class'])) { ?> class="<?php
								echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php
								echo htmlspecialchars($item['text']) ?></a></li>
			<?php			} ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="userMenuTag"><?php echo translate('User Menu','Kullanıcı Menüsü'); ?></div>
		</div>
		<div class="header container_16">
			<div class="clear"></div>
			<div class="topFirst grid_16">
			
			</div>
			<div class="clear"></div>
			<div class="grid_8">
                            <div class="portlet logo" id="p-logo">
                                    <a style="background-image: url(<?php  echo $wgScriptPath."<?php echo translate('/skins/openurbane/images/OU_LockUp_with_logo.png','/skins/openurbane/images/acikkent_logo.png'); ?>" ?>);" <?php
                                            ?>href="<?php echo htmlspecialchars($this->data['nav_urls']['mainpage']['href'])?>"<?php
                                            echo $this->tooltipAndAccesskey('p-logo') ?>></a>
                            </div>
                            <script type="<?php $this->text('jsmimetype') ?>"> if (window.isMSIE55) fixalpha(); </script>
				<!--div class="logo"></div-->
			</div>
			<div class="grid_8">
				<div class="headerRight">
					<div class=login>
                    <a href="http://openurban.com/index.php?title=Main_Page">English</a>, <a href="http://tr.openurban.com/index.php?title=Ana_Sayfa">Türkçe</a>		
                    </div>
                    <div class="search">
						<?php
							$sidebar = $this->data['sidebar'];
							if ( !isset( $sidebar['SEARCH'] ) ) $sidebar['SEARCH'] = true;
							foreach ($sidebar as $boxName => $cont) {
								if ( $boxName == 'SEARCH' ) {
									$this->searchBox();
								} 
							}
						?>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="sunflower"></div>
		</div>
	</div>
</div>
<div class="wideMainmenu">
	<div class="container_16">
		<div class="grid_13 alpha">
			<div id="p-navigation">
	        	<ul>
	            	<li>
	                	<a href="/index.php?title=<?php echo translate('Map','Harita'); ?>"><?php echo translate('MAP','HARİTA'); ?></a> 
	                </li>
	                <li>
	                	<a href="/index.php?title=<?php echo translate('Cities','Şehirler'); ?>"><?php echo translate('CITIES','ŞEHIRLER'); ?></a> 
	                </li>
	                <li>  
	                    <a href="/index.php?title=<?php echo translate('Add Project','Proje Ekle'); ?>"><?php echo translate('ADD PROJECT','PROJE EKLE'); ?></a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <div class="grid_3">
	        <div class="follow">
	            <ul>
					<li><a class="aFacebook" href="<?php echo translate('http://www.facebook.com/OpenUrban','http://www.facebook.com/acikkentforum?fref=ts'); ?>"></a></li>
					<li><a class="aTwitter" href="<?php echo translate('http://www.twitter.com/Open_Urban/','http://www.twitter.com/acikkent/'); ?>"></a></li>
				</ul>
			</div>
		</div>
    </div>
		<?php
			$sidebar = $this->data['sidebar'];
			foreach ($sidebar as $boxName => $cont) {
				if ( $boxName == 'navigation' ) {
					$this->navigationBox( $boxName, $cont );
				}
			}
		?>
	</div>
</div>
<div id="globalWrapper" >
	<div class="contentTopBgr"></div>
	<div class="container_16">
		<div id="column-content" class="grid_16"><!--  p-cactions here -->
		<?php if (true === $gmwAlwaysShowActionsMenu || !$wgUser->isAnon()){?>
			<div id="p-cactions" class="portlet">
				<div class="pBody">
					<ul><?php
						foreach($this->data['content_actions'] as $key => $tab) {
							echo '
						 <li id="' . Sanitizer::escapeId( "ca-$key" ) . '"';
							if( $tab['class'] ) {
								echo ' class="'.htmlspecialchars($tab['class']).'"';
							}
							echo '><a href="'.htmlspecialchars($tab['href']).'"';
							# We don't want to give the watch tab an accesskey if the
							# page is being edited, because that conflicts with the
							# accesskey on the watch checkbox.  We also don't want to
							# give the edit tab an accesskey, because that's fairly su-
							# perfluous and conflicts with an accesskey (Ctrl-E) often
							# used for editing in Safari.
							if( in_array( $action, array( 'edit', 'submit' ) )
							&& in_array( $key, array( 'edit', 'watch', 'unwatch' ))) {
								echo $skin->tooltip( "ca-$key" );
							} else {
								echo $this->tooltipAndAccesskey( "ca-$key" );
							}
							echo '>'.htmlspecialchars($tab['text']).'</a></li>';
						} ?>
					</ul>
				</div>
			</div>
                    <?php } ?><!-- end p-cactions --><div class="clear"></div>
			<div id="content" <?php $this->html("specialpageattributes") ?>>
				<a id="top"></a>
				<?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php $this->html('sitenotice') ?></div><?php } ?>
				<h1 id="firstHeading" class="firstHeading"><?php $this->html('title') ?></h1>
				<div id="bodyContent">
					<div class="serviceInfoTop">
						<h3 id="siteSub"><?php $this->msg('tagline') ?></h3>
						<div id="contentSub"<?php $this->html('userlangattributes') ?>><?php $this->html('subtitle') ?></div>
				<?php if($this->data['undelete']) { ?>
						<div id="contentSub2"><?php $this->html('undelete') ?></div>
				<?php } ?><?php if($this->data['newtalk'] ) { ?>
						<div class="usermessage"><?php $this->html('newtalk')  ?></div>
				<?php } ?><?php if($this->data['showjumplinks']) { ?>
						<div id="jump-to-nav"><?php $this->msg('jumpto') ?> <a href="#column-one"><?php $this->msg('jumptonavigation') ?></a>, <a href="#searchInput"><?php $this->msg('jumptosearch') ?></a></div>
				<?php } ?>
					</div>
					<!-- start content -->
					<?php $this->html('bodytext') ?>
					<?php if($this->data['catlinks']) { $this->html('catlinks'); } ?>
					<?php
					// Generate additional footer links
					$footerlinks = array(
						'lastmod', 'viewcount',
					);
					$validFooterLinks = array();
					foreach( $footerlinks as $aLink ) {
						if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
							$validFooterLinks[] = $aLink;
						}
					}
					if ( count( $validFooterLinks ) > 0 ) {
					?>	<ul id="f-list-content">
					<?php
							foreach( $validFooterLinks as $aLink ) {
								if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
					?>				<li id="<?php echo $aLink ?>"><?php $this->html($aLink) ?></li>
					<?php 		}
							}
					?>
						</ul>
			<?php	}
				?>
					<!-- end content -->
					<?php if($this->data['dataAfterContent']) { $this->html ('dataAfterContent'); } ?>
					<div class="visualClear"></div>
				</div>
			</div>
		</div>
		<!--<div id="column-one"<?php $this->html('userlangattributes')  ?> class="grid_4 omega">-->
                    <!-- p-cactions --><!--sidebar-->
		<!--</div>--><!-- end of the left (by default at least) column -->
		<div class="clear"></div>
		
	</div>
</div>
<div id="feedback">
<a href="/index.php?title=<?php echo translate('Feedback','Geribesleme'); ?>"><img src="/skins/openurbane/images/<?php echo translate('feedback_button','feedback_button_turkish'); ?>.png" /></a>
</div>
<div class="wideFooter">
	<div class="container_16">
		
		<div id="footer"<?php $this->html('userlangattributes') ?> class="grid_16">
			<div class="footerBgr"></div>
			<div class="grid_2 alpha">
				<div class="footerToplist"><?php echo translate('CONNECT','BAĞLAN'); ?></div>
				<div class="pBody">
					<ul>
						<li><a href="http://www.facebook.com/OpenUrban"><?php echo translate('Facebook','Facebook'); ?></a></li>
						<li><a href="http://www.twitter.com/Open_Urban/"><?php echo translate('Twitter','Twitter'); ?></a></li>
						<li><a href="http://eepurl.com/nrhGD"><?php echo translate('Newsletter','Bülten'); ?></a></li>
                        <li><a href="mailto:info@openurban.com"><?php echo translate('Email','E-posta'); ?></a></li>
					</ul>
				</div>
			</div>
            <div class="grid_2">
				<div class="footerToplist"><?php echo translate('SUPPORT','DESTEK'); ?></div>
				<div class="pBody">
					<ul>
						<li><a href="/index.php?title=<?php echo translate('Donate','Bağışlamak'); ?>"><?php echo translate('Donate','Bağışlamak'); ?></a></li>
						<li><a href="https://github.com/waltz/openurban"><?php echo translate('Github','Github'); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="grid_2">
				<div class="footerToplist"><?php echo translate('ABOUT','HAKKINDA'); ?></div>
				<div class="pBody">
					<ul>
						<li><a href="/index.php?title=<?php echo translate('Team','Takım'); ?>"><?php echo translate('Team','Takım'); ?></a></li>
						<li><a href="/index.php?title=<?php echo translate('History','Geçmiş'); ?>"><?php echo translate('History','Geçmiş'); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="grid_2">
				<div class="footerToplist"><?php echo translate('HELP','YARDIM'); ?></div>
				<div class="pBody">
					<ul>
						<li><a href="/index.php?title=<?php echo translate('Guidelines','Kılavuzlar'); ?>"><?php echo translate('Guidelines','Kılavuzlar'); ?></a></li>
						<li><a href="/index.php?title=<?php echo translate('How To','Nasıl Yapılır'); ?>"><?php echo translate('How To','Nasıl Yapılır'); ?></a></li>
						<li><a href="/index.php?title=<?php echo translate('FAQ','SSS'); ?>"><?php echo translate('FAQ','SSS'); ?></a></li>
					</ul>
				</div>
			</div>
			<!--<div class="grid_4">-->
							<?php
				$sidebar = $this->data['sidebar'];
				if ( !isset( $sidebar['TOOLBOX'] ) ) $sidebar['TOOLBOX'] = true;
				if ( !isset( $sidebar['LANGUAGES'] ) ) $sidebar['LANGUAGES'] = true;
				foreach ($sidebar as $boxName => $cont) {
					if ( $boxName == 'TOOLBOX' ) {
						$this->toolbox();
					} elseif ( $boxName == 'LANGUAGES' ) {
						$this->languageBox();
					} elseif ( $boxName != 'SEARCH'&& $boxName != 'navigation') {
						$this->customBox( $boxName, $cont );
					}
				}
			?>
			<!--</div>-->
			<div class="clear"></div>
		</div>
		<div id="footerLinks" class="grid_16">
        	<div class="footerLinksMenu grid_2 alpha">
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>
            </div>
			<div class="footerLinksMenu grid_6">
			<?php
				// Generate additional footer links
					$footerlinks = array(
						'numberofwatchingusers', 'credits', 'copyright',
						'privacy', 'about', 'disclaimer', 'tagline',
					);
					$validFooterLinks = array();
					foreach( $footerlinks as $aLink ) {
						if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
							$validFooterLinks[] = $aLink;
						}
					}
					if ( count( $validFooterLinks ) > 0 ) {
			?>	<ul id="f-list">
			<?php
						foreach( $validFooterLinks as $aLink ) {
							if( isset( $this->data[$aLink] ) && $this->data[$aLink] ) {
			?>		<li id="<?php echo $aLink ?>"><?php $this->html($aLink) ?></li>
			<?php 			}
						}
			?>
				</ul>
			<?php	}
			?>
			</div>
			<div id="footerLogo" class="grid_8 omega">
				Powered by: <a href="http://www.mediawiki.org/wiki/MediaWiki">Mediawiki, </a><a href="http://semantic-mediawiki.org">Semantic Mediawiki, </a>from <a href="http://gomediawiki.com">GoMediaWiki</a> skin
			</div>
			<div class="clear"></div>
			<div class="grid_16 alpha omega">
			<div class="poweredBy">
		<?php
				//if($this->data['poweredbyico']) { ?>
					<div id="f-poweredbyico"><?php $this->html('poweredbyico') ?></div>
		<?php	//}
				//if($this->data['copyrightico']) { ?>
					<div id="f-copyrightico"><?php $this->html('copyrightico') ?></div>
		<?php	//} ?>
			</div>
			</div>
		</div>
	</div>
</div>
<?php $this->html('bottomscripts'); /* JS call to runBodyOnloadHook */ ?>
<?php $this->html('reporttime') ?>
<?php if ( $this->data['debug'] ): ?>
<!-- Debug output:
<?php $this->text( 'debug' ); ?>

-->
<?php endif; ?>
</body></html>
<?php
	wfRestoreWarnings();
	} // end of execute() method

	/*************************************************************************************************/
	function searchBox() {
		global $wgUseTwoButtonsSearchForm;
?>
	<div id="p-search" class="portlet">
		<div id="searchBody" class="pBody">
			<form action="<?php $this->text('wgScript') ?>" id="searchform">
				<input type='hidden' name="title" value="<?php $this->text('searchtitle') ?>"/>
				<div class="searchWrapper">

				<?php
		echo Html::input( 'search',
			isset( $this->data['search'] ) ? $this->data['search'] : '', 'search',
			array(
				'id' => 'searchInput',
				'title' => $this->skin->titleAttrib( 'search' ),
				'accesskey' => $this->skin->accesskey( 'search' )
			) ); ?>

				<input type='submit' name="go" class="searchButton" id="searchGoButton"	value="<?php /* $this->msg('searcharticle') */?>" <?php echo $this->tooltipAndAccesskey( 'search-go' );  ?> />
				</div>
				<?php /* if ($wgUseTwoButtonsSearchForm) { ?>&nbsp;
				<input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="<?php $this->msg('searchbutton') ?>"<?php echo $this->tooltipAndAccesskey( 'search-fulltext' ); ?> /><?php } else { ?>

				<div><a href="<?php $this->text('searchaction') ?>" rel="search"><?php $this->msg('powersearch-legend') ?></a></div><?php } */ ?>

			</form>
		</div>
	</div>
<?php
	}

	/*************************************************************************************************/
	function toolbox() {
?>
	<div class="portlet grid_4" id="p-tb">
		<h5><?php $this->msg('toolbox') ?></h5>
		<div class="pBody">
			<ul>
<?php
		if($this->data['notspecialpage']) { ?>
				<li id="t-whatlinkshere"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['whatlinkshere']['href'])
				?>"<?php echo $this->tooltipAndAccesskey('t-whatlinkshere') ?>><?php $this->msg('whatlinkshere') ?></a></li>
<?php
			if( $this->data['nav_urls']['recentchangeslinked'] ) { ?>
				<li id="t-recentchangeslinked"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['recentchangeslinked']['href'])
				?>"<?php echo $this->tooltipAndAccesskey('t-recentchangeslinked') ?>><?php $this->msg('recentchangeslinked-toolbox') ?></a></li>
<?php 		}
		}
		if( isset( $this->data['nav_urls']['trackbacklink'] ) && $this->data['nav_urls']['trackbacklink'] ) { ?>
			<li id="t-trackbacklink"><a href="<?php
				echo htmlspecialchars($this->data['nav_urls']['trackbacklink']['href'])
				?>"<?php echo $this->tooltipAndAccesskey('t-trackbacklink') ?>><?php $this->msg('trackbacklink') ?></a></li>
<?php 	}
		if($this->data['feeds']) { ?>
			<li id="feedlinks"><?php foreach($this->data['feeds'] as $key => $feed) {
					?><a id="<?php echo Sanitizer::escapeId( "feed-$key" ) ?>" href="<?php
					echo htmlspecialchars($feed['href']) ?>" rel="alternate" type="application/<?php echo $key ?>+xml" class="feedlink"<?php echo $this->tooltipAndAccesskey('feed-'.$key) ?>><?php echo htmlspecialchars($feed['text'])?></a>&nbsp;
					<?php } ?></li><?php
		}

		foreach( array('contributions', 'log', 'blockip', 'emailuser', 'upload', 'specialpages') as $special ) {

			if($this->data['nav_urls'][$special]) {
				?><li id="t-<?php echo $special ?>"><a href="<?php echo htmlspecialchars($this->data['nav_urls'][$special]['href'])
				?>"<?php echo $this->tooltipAndAccesskey('t-'.$special) ?>><?php $this->msg($special) ?></a></li>
<?php		}
		}

		if(!empty($this->data['nav_urls']['print']['href'])) { ?>
				<li id="t-print"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['print']['href'])
				?>" rel="alternate"<?php echo $this->tooltipAndAccesskey('t-print') ?>><?php $this->msg('printableversion') ?></a></li><?php
		}

		if(!empty($this->data['nav_urls']['permalink']['href'])) { ?>
				<li id="t-permalink"><a href="<?php echo htmlspecialchars($this->data['nav_urls']['permalink']['href'])
				?>"<?php echo $this->tooltipAndAccesskey('t-permalink') ?>><?php $this->msg('permalink') ?></a></li><?php
		} elseif ($this->data['nav_urls']['permalink']['href'] === '') { ?>
				<li id="t-ispermalink"<?php echo $this->skin->tooltip('t-ispermalink') ?>><?php $this->msg('permalink') ?></li><?php
		}

		wfRunHooks( 'MonoBookTemplateToolboxEnd', array( &$this ) );
		wfRunHooks( 'SkinTemplateToolboxEnd', array( &$this ) );
?>
			</ul>
		</div>
	</div>
<?php
	}

	/*************************************************************************************************/
	function languageBox() {
		if( $this->data['language_urls'] ) {
?>
	<div id="p-lang" class="portlet">
		<h5<?php $this->html('userlangattributes') ?>><?php $this->msg('otherlanguages') ?></h5>
		<div class="pBody">
			<ul>
<?php		foreach($this->data['language_urls'] as $langlink) { ?>
				<li class="<?php echo htmlspecialchars($langlink['class'])?>"><?php
				?><a href="<?php echo htmlspecialchars($langlink['href']) ?>"><?php echo $langlink['text'] ?></a></li>
<?php		} ?>
			</ul>
		</div>
	</div>
<?php
		}
	}

	/*************************************************************************************************/
	function customBox( $bar, $cont ) {
?>
	<div class='generated-sidebar portlet grid_4' id='<?php echo Sanitizer::escapeId( "p-$bar" ) ?>'<?php echo $this->skin->tooltip('p-'.$bar) ?>>
		<h5><?php $out = wfMsg( $bar ); if (wfEmptyMsg($bar, $out)) echo htmlspecialchars($bar); else echo htmlspecialchars($out); ?></h5>
		<div class='pBody'>
<?php   if ( is_array( $cont ) ) { ?>
			<ul>
<?php 			foreach($cont as $key => $val) { ?>
				<li id="<?php echo Sanitizer::escapeId($val['id']) ?>"<?php
					if ( $val['active'] ) { ?> class="active" <?php }
				?>><a href="<?php echo htmlspecialchars($val['href']) ?>"<?php echo $this->tooltipAndAccesskey($val['id']) ?>><?php echo htmlspecialchars($val['text']) ?></a></li>
<?php			} ?>
			</ul>
<?php   } else {
			# allow raw HTML block to be defined by extensions
			print $cont;
		}
?>
		</div>
	</div>
<?php
	}
	function navigationBox( $bar, $cont ) {
?>
	<div class='generated-sidebar portlet grid_16' id='<?php echo Sanitizer::escapeId( "p-$bar" ) ?>'<?php echo $this->skin->tooltip('p-'.$bar) ?>>
		<!--<h5><?php $out = wfMsg( $bar ); if (wfEmptyMsg($bar, $out)) echo $bar; else echo $out; ?></h5>-->
		<div class='pBody'>
<?php   if ( is_array( $cont ) ) { ?>
			<ul>
<?php                   foreach($cont as $key => $val) { ?>
				<li id="<?php echo Sanitizer::escapeId($val['id']) ?>"<?php
					if ( $val['active'] ) { ?> class="active" <?php }
				?>><a href="<?php echo htmlspecialchars($val['href']) ?>"<?php echo $this->tooltipAndAccesskey($val['id']) ?>><?php echo htmlspecialchars($val['text']) ?></a>
				</li>
<?php			}
?>
			</ul>
<?php   } else {
			# allow raw HTML block to be defined by extensions
			print $cont;
		}
?>
		</div>
	</div>
	<div class="clear"></div>
<?php
	}
	function tooltipAndAccesskey($name){
            global $wgVersion;
            if ( version_compare($wgVersion, '1.18.0', '<') ) {
                return $this->skin->tooltipAndAccesskey($name);
            }else{
                $retrunString = ' ';
                foreach(Linker::tooltipAndAccesskeyAttribs($name) as $key => $item){
                    $retrunString += $key + '="' + $item +'" ';
                }
                return $retrunString;
            }	
        }

} // end of class