<?php
$current_plugins = get_option('active_plugins');

$mcssearchplugin = (is_array($current_plugins) && in_array('mcsajaxsearch/mcsajaxsearch.php', $current_plugins));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es-ES">
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" type="text/css" media="screen" />
<?php if (get_bloginfo('text_direction') == 'rtl') { // Include rtl.css for RTL locales ?>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/rtl.css" type="text/css" media="screen" />
<?php } ?>
<!--[if lt IE 8]>
  <meta http-equiv="imagetoolbar" content="no" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 7]>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" type="text/css" media="screen" />
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/dd_belatedpng_0.0.8a-min.js"></script>
  <script type="text/javascript"> 
    DD_belatedPNG.fix('*');
  </script> 
<![endif]-->
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png"/>
  <link rel="home" title="Home" href="<?php echo get_option('home'); ?>/" />
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.domec.min-0.3.1.js"></script> 
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/default.js"></script>
<?php if ($mcssearchplugin) { ?>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mcs-search-box.js"></script>
<?php } ?>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mcs-login-box.js"></script>

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/custom.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wordpress.css" type="text/css" media="screen" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
  <?php wp_head(); ?>

  <script type="text/javascript">
var loggedIn = <?php print(is_user_logged_in()?'true':'false')?>;
var username = "<?php $user = wp_get_current_user(); print($user->data->user_login)?>";
var logoutUrl = "<?php echo wp_logout_url(get_permalink()); ?>";
var blogUrl = "<?php echo get_option('home')?>";
var searchJSONpath = "<?php echo get_bloginfo('home').'/wp-content/plugins/mcsajaxsearch/mcssearch.json.php' ?>";
  </script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15118053-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</head>
<body <?php body_class(); ?>>
  <ul id="nav-access">
    <li><a href="#content">Skip to content</a></li>
  </ul>
  <div id="header-bar" class="header">
    <div class="doc">
      <div class="logo">
       <!-- <img src="<?php bloginfo('template_directory'); ?>/img/logo/dino.png" class="dino" alt="" /> -->
        <img src="<?php bloginfo('template_directory'); ?>/img/logo/mcs-logo-dark.png" class="mcs-logo-dark" alt="" />
        <img src="<?php bloginfo('template_directory'); ?>/img/logo/mozilla.png" class="mozilla" alt="mozilla" />
        <span>community website</span>
      </div>
      <ul class="nav">
        <li id="hb-search-box">
          <form method="get" id="searchform" action="<?php echo get_option('home'); ?>" >
            <div>
              <input type="text" id="hb-searchinput" name="s" />
              <input type="submit" id="hb-searchbutton" value="&#9658;" />
            </div>
          </form>
        </li>
        <li><a href="<?php echo get_option('home'); ?>/wp-login.php" class="mct-login-box-activator"><?php echo __('Log in'); ?></a></li>
      </ul>
    </div>
  </div>
  <div id="header" class="header">
    <div class="doc">
      <a href="<?php echo get_option('home'); ?>/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mctlogo.png" id="logo" alt="" />
        <span id="title"><?php bloginfo('name'); ?></span>
      </a>
      <!-- <span id="sub-title"><?php bloginfo('description'); ?></span> -->
      <ul class="nav">
<?php
print ('<li class="'.(is_home()?'current_page_item':'').'"><a href="'.get_option('home').'/">Inicio</a></li>');
?>
<li class="page_item page-item-6"><a href="http://wiki.mozillavenezuela.org" title="Wiki">Wiki</a></li>
<li class="page_item page-item-6"><a href="http://foro.mozillavenezuela.org" title="foro">Foro</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li=&depth=1'); ?>
      </ul>
    </div>
  </div>
  <div id="middle" class="doc">
    <div class="row">
<?php
ob_start();
dynamic_sidebar('left');
$left_sidebar = ob_get_clean();
if ($left_sidebar) {
?>
      <ul id="left-menu" class="aside">
<?php echo $left_sidebar; ?>
      </ul>
<?php } ?>
<?php
ob_start();
dynamic_sidebar('right');
$right_sidebar = ob_get_clean();
if ($right_sidebar) {
?>
      <ul id="right-menu" class="aside">
<?php echo $right_sidebar; ?>
      </ul>
<?php } ?>
      <div id="content" class="section">
