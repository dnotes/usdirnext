<?php
// $Id: page.tpl.php,v 1.11.2.2 2010/08/06 11:13:42 goba Exp $

/**
 * @file
 * Displays a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   element.
 * - $head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the
 *   current path, whether the user is logged in, and so on.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled in
 *   theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been
 *   disabled in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been
 *   disabled.
 * - $primary_links (array): An array containing primary navigation links for
 *   the site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links
 *   for the site, if they have been configured.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $content: The main content of the current Drupal page.
 * - $right: The HTML for the right sidebar.
 * - $node: The node object, if there is an automatically-loaded node associated
 *   with the page, and the node ID is the second argument in the page's path
 *   (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic
 *   content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
?>
<!DOCTYPE html>
<!--[if IE 6]><![endif]-->
<html dir="ltr" lang="en-US">
<head>
  <?php print $head; ?>


	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="chrome=1" />

	<!--[if lt IE 9]>
		<script type="text/javascript" charset="utf-8">
var is_ssl = ("https:" == document.location.protocol);
var asset_proto = is_ssl ? "https://" : "http://";
document.write(unescape("%3Cscript src='" + asset_proto + "html5shiv.googlecode.com/svn/trunk/html5.js' <http://html5shiv.googlecode.com/svn/trunk/html5.js'> type='text/javascript'%3E%3C/script%3E"));
</script>
	<![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="screen" href="http://next.bahai.us/wp-content/themes/carrington-business/css/lte-ie7.css?ver=1.1.1" />
	<![endif]-->
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>



</head>
<body class="home page page-id-25447 page-parent page-template page-template-page-blank-php">
	<div id="navWrapper">
	<div id="mainNav">
  		<div class="centerContent">
  		<div id="NINE">
  			<h1 class="site-title"><a class="siteLogo" href="http://next.bahai.us/" title="Home">
  				Bah&aacute;&rsquo;&iacute; Faith
  			</a></h1>

  		</div>
  		<div id="globalNav">
  				<div  class="current" >
  					<div class="left"></div>
  					<div class="center"><a href="http://next.bahai.us/">Welcome</a></div>
  					<div class="right"></div>
  				</div>
  				<div >
  					<div class="left"></div>

  					<div class="center"><a href="http://next.bahai.us/community-life">Community</a></div>
  					<div class="right"></div>
  				</div>
  				<div >
  					<div class="left"></div>
  					<div class="center"><a href="http://next.bahai.us/news">News</a></div>
  					<div class="right"></div>
  				</div>

  			</div>
		</div> <!-- / .centerContent -->
  	</div> <!-- / #mainNav -->
		<div class="centerContent">
  			<div id="siteNav">
  			<ul id="siteNavList">
							<li class="tagline">Official Website of the Bah&aacute;&rsquo;&iacute;s of the United States</li>

						</ul>

			<form class="searchform" method="get" action="http://next.bahai.us/" onsubmit="location.href=this.action+'search/'+encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;">
	<label>Search</label>
	<div>
		<input type="text" id="s-4db7a1589cd99" class="s" name="s" value="" />
		<input type="submit" class="searchsubmit" value="Search" />
	</div>
</form>
  			</div> <!-- / #siteNav -->
  		</div> <!-- / .centerContent -->

  	</div> <!-- #navWrapper -->
	</div><!-- #header -->
	<hr class="accessibility" />

        <div id="main" class="str-container">
          <div id="main-content">
            <div class="str-content clearfix">

              <div class="<?php print $sidebar1 ? 'col-ab' : 'col-abc'; ?>">

              <div id="main-content-wrapper">
                <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>


                <?php if ($title): print '<h2 class="page-title">'. $title .'</h2>'; endif; ?>

                <?php if (isset($tabs2)): print $tabs2; endif; ?>

                <?php if ($help): print $help; endif; ?>
                <?php print $content_top; ?>

                <?php print $content; ?>

                <?php if ($content_bottom): ?>
                  <div class="content-bottom">
                    <?php print($content_bottom) ?>
                  </div>
                <?php endif; ?>

              </div>


            </div>

              <?php if ($sidebar1): ?>
              <div id="navblocks" class="col-c">
                <?php print $sidebar1; ?>

              </div>
              <?php endif; ?>
              
            </div>
          </div>
        </div>

<div id="footer">
	<div class="str-container">

		<div id="footer-content">
			<div class="str-content clearfix">
        <?php print $base; ?>

      </div>
    </div>

		<div id="footer-sub">
			<div class="copyright">© Copyright <?php echo date("Y"); ?> National Spiritual Assembly of the Baha'is of the United States</div>		</div><!-- #footer-sub -->

	</div><!-- .str-container -->
</div><!-- #footer -->

<?php print $closure; ?>
</body>
</html>