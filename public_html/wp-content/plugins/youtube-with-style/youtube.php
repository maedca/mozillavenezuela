<?php
/*
Plugin Name: youtube with style
Plugin URI: http://wordpress.org/extend/plugins/youtube-with-style/
Description: show a youtube video with style
Date: March, 6th, 2010
Version: 7.0
Author: fris
Author URI: http://wp.am
*/

function yt_root() {
	return get_bloginfo('url').'/'.PLUGINDIR.'/youtube-with-style/lib';
}

function yt_head() {
	$fileLoc = yt_root();
	echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js"></script>';
	echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>';

        if(is_active_widget('youtube_widget')) {

	echo '<script type="text/javascript" src="' . $fileLoc . '/highslide/highslide-with-html.packed.js"></script>';
	echo '<link rel="stylesheet" href="' . $fileLoc . '/highslide/highslide.css" type="text/css" media="screen" />';
	echo '
	<script type="text/javascript">
		hs.graphicsDir = "'.$fileLoc.'/highslide/graphics/";
		hs.outlineType = "rounded-white";
		hs.outlineWhileAnimating = true;
		hs.showCredits = false;
		hs.wrapperClassName = "draggable-header no-footer";
		hs.allowSizeReduction = false;
		hs.preserveContent = false;
	</script>
	';
        }
}

function yt_shortcode($atts,$content) {
	$nwidth = get_option('yt_player_width');
	$nheight = get_option('yt_player_height');
	extract(shortcode_atts(array('width' => "$nwidth",'height' => "$nheight"),$atts));
	$regex  = "/(?:(?:http:\/\/)?(?:www\.)?youtube\.com\/)?(?:(?:watch\?)?v=|v\/)?([a-zA-Z0-9\-\_]{11})(?:&[a-zA-Z0-9\-\_]+=[a-zA-Z0-9\-\_]+)*/";
	if(preg_match_all($regex,$content,$matches,PREG_SET_ORDER)) {
		$content = $matches[0][1];
	}
	static $counter = 1;
	$fileLoc = yt_root();
	return '
	<script type="text/javascript">
		var flashvars = {};
		flashvars.playOnStart = "false";
		flashvars.startVolume = "70";
		flashvars.autoHideOther = "false";
		flashvars.autoHideVideoControls = "false";
		flashvars.onStartShowControls = "true";
		flashvars.fullVideoScale = "true";
		flashvars.showPlayButton = "true";
		flashvars.share = "false";
		flashvars.MediaLink2 = "http://www.youtube.com/watch?v='.$content.'";
		flashvars.image = "'.$fileLoc.'/img.php?v='.$content.'";
		var params = {};
		params.bgcolor = "#000000";
		params.allowfullscreen = "true";
		params.wmode = "opaque";
		var attributes = {};
		attributes.id = "myplayer";
		swfobject.embedSWF("' . $fileLoc . '/player.swf", "myAlternativeContent", "'.$width.'", "'.$height.'", "9.0.0", false, flashvars, params, attributes);
	</script> <div id="myAlternativeContent">blah</div>';
}

function yt_logo() {
	echo yt_root().'/yt.png';
}

function yt_add_tab($tabs) {
	if (yt_is_applicable()) {
	    $tabs['search'] = __('You Tube'); 
	}
	return $tabs;
}

add_filter('media_upload_tabs', 'yt_add_tab');

function yt_tab_content() {
	$type = $_GET['type'];
	switch ($type) {
	case 'video':
	    wp_iframe('media_search_video_form');
	    break;
	}
}

function yt_is_media_tb() {
	$filename = basename($_SERVER['SCRIPT_FILENAME']);
    	return 'media-upload.php' == $filename;
}

function yt_is_video_tab() {
    return yt_is_media_tb() && isset($_GET['type']) && 'video' == $_GET['type'] && isset($_GET['tab']) && 'search' == $_GET['tab'];	
}

function yt_print_scripts() {
	$siteurl = get_option('siteurl');
	$player = $siteurl . '/wp-content/plugins/' . basename(dirname(__FILE__)) . '/lib/player.swf';
	if (yt_is_video_tab()) {
	    echo '<script type="text/javascript"> var player = "' . $player . '"; </script>';
	    wp_enqueue_script('json_sans_eval', yt_root().'/json.js');
	    wp_enqueue_script('yt_search_video', yt_root().'/search.js');
	}
}

add_action('admin_print_scripts', 'yt_print_scripts');

function yt_print_styles() {
	if (yt_is_video_tab()) {
	    wp_enqueue_style('yt_search_video', yt_root().'/search.css');
	}
}

add_action('admin_print_styles', 'yt_print_styles');

function media_search_video_form() {
	media_upload_header();
    	$post_id = $_GET['post_id'];
	include(WP_PLUGIN_DIR.'/youtube-with-style/lib/search.php');
}

function yt_iframe_content() {
	media_upload_type_form();
}

add_action('media_upload_search', 'yt_tab_content');

function yt_is_applicable() {
	$types = array('video');
	return in_array($_GET['type'], $types);
}

function yt_fetch_feed($uri) {
	if (function_exists('curl_init')) {
		$ch = curl_init ($uri) ;
        	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1) ;
        	$res = curl_exec ($ch) ;
        	curl_close ($ch) ;
	}
	else if ("1" == ini_get("allow_url_fopen")) {
	    $res =  file_get_contents($uri);	
	}
	else {
		$res = '';
	}

	return $res;
}

function yt_search_video() {
	if (isset($_POST['uri'])) {
		$uri = $_POST['uri'];
	}
	else {
		$q = isset($_POST['q']) ? urlencode($_POST['q']) : 'wordpress';
		$orderby = isset($_POST['orderby']) ? $_POST['orderby'] : 'relevance';
		$uri = "http://gdata.youtube.com/feeds/api/videos?q=$q&orderby=$orderby&max-results=12&v=2&alt=json";
	}
	$feed = yt_fetch_feed($uri);
	@header('Content-type: application/json; charset=UTF-8');
	die($feed);
}

add_action('wp_ajax_search_video', 'yt_search_video');

add_action('wp_head','yt_head');

add_shortcode('youtube','yt_shortcode');

function yt_activate() {
	add_option('yt_player_width', 460);
	add_option('yt_player_height', 310);
}

add_action('admin_menu', "yt_admin_init");

function yt_admin_init() {
	add_options_page('Youtube with Style Options', 'Youtube with Style', 8, 'youtubeoptions', 'yt_options_admin');
}

function yt_deactivate() {
    delete_option('yt_player_width');
    delete_option('yt_player_height');
}

register_activation_hook(__FILE__, 'yt_activate');
register_deactivation_hook(__FILE__, 'yt_deactivate');


function yt_options_admin() {
?>
	<div class="wrap">
	<h2>Youtube with Style Options</h2>
	
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	
	<table class="form-table">
				
	<tr valign="top">
	<th style="white-space:nowrap;" scope="row"><label for="yt_player_width"><?php _e("Default Player width"); ?>:</label></th>
	<td><input id="yt_player_width" type="text" name="yt_player_width" value="<?php echo get_option('yt_player_width'); ?>" /></td>
	<td style="width:100%;">The width of the player if not set by the shortcode.</td>
	</tr>

	<tr valign="top">
	<th style="white-space:nowrap;" scope="row"><label for="yt_player_height"><?php _e("Default Player height"); ?>:</label></th>
	<td><input id="yt_player_height" type="text" name="yt_player_height" value="<?php echo get_option('yt_player_height'); ?>" /></td>
	<td>The height of the player if not set by the shortcode.</td>
	</tr>

	</table>
	
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="yt_player_width,yt_player_height" />
	
	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	</form>

	</div>

<?php 
} 

function youtube_widget_init() {
	if (!function_exists('register_sidebar_widget')) return;

	function youtube_widget($args) {
	
	extract($args);

	$options = get_option('youtube_widget');

        $fileLoc = yt_root();
	$myplayer = $fileLoc . '/player.swf';

	$sortorder = empty($options['sortorder']) ? 'published' : $options['sortorder'];
	$title = empty($options['title']) ? 'YouTube Feed' : $options['title'];
	$num = empty($options['num']) ? 5 : $options['num'];
	$url = $options['url'];
	$type = empty($options['type']) ? 'user' : $options['type'];
	$videos = youtube_getvideos($num, $url, $type, $sortorder);
	echo $before_widget;
	echo $before_title . $title . $after_title;
	echo '</li>';	
	foreach ($videos as $video) {
		$videolink = $video['url'];
		$vlink = trim($videolink,"&feature=youtube_gdata");
		$videothumb = $video['thumb'];
		$videotitle = $video['title']; 
		?>
		<li><a href="#" onclick="return hs.htmlExpand(this, { src: '<?php echo $myplayer;?>', objectType: 'swf', width: 560, objectWidth: 560, objectHeight: 280, maincontentText: 'You need to upgrade your Flash player',swfOptions: { version: '7' ,params: {wmode: 'transparent'}, flashvars: { playOnStart: 'true', MediaLink: '<?php echo $vlink;?>'},} } )" class="highslide"><img border="0" alt="<?php echo $videotitle;?>" src="<?php echo $videothumb;?>" /></a><p><?php echo $videotitle;?></p></li>
		<?
	}
}
	
function youtube_getvideos($num, $url, $type, $sortorder = 'published') {
	if (!empty($url)) {
		if ($type=='user') {
			$url = 'http://gdata.youtube.com/feeds/api/videos?author='.$url.'&max-results='.$num.'&orderby='.$sortorder;
		} else if ($type=='favorites') {
			$url = 'http://gdata.youtube.com/feeds/api/users/'.$url.'/favorites?v=2&max-results='.$num.'&orderby='.$sortorder;
			} else if ($type=='playlist') {
				$url = 'http://gdata.youtube.com/feeds/api/playlists/'.$url.'/?max-results='.$num.'&orderby='.$sortorder.'&v=2';
		} else {
			$url = 'http://gdata.youtube.com/feeds/api/videos?q='.$url.'&orderby='.$sortorder.'&max-results='.$num.'&v=2';
		}

		$sxml = simplexml_load_file($url);
		$i = 0;
		$videoobj;
			
		foreach ($sxml->entry as $entry) {
			if ($i == $num) {
				break;
			}
			$media = $entry->children('http://search.yahoo.com/mrss/');
			$attrs = $media->group->player->attributes();
			$videoobj[$i]['url'] = $attrs['url'];
			$attrs = $media->group->thumbnail[0]->attributes();
			$videoobj[$i]['thumb'] = $attrs['url']; 
			$videoobj[$i]['title'] = $media->group->title;
			$i++;
		    }
		} else {
			return null;
		}
		return $videoobj;
	}
	
function youtube_fixlink($url) {
	return trim($url,'&feature=youtube_gdata');
}
	
function youtube_widget_control() {
	$options = get_option('youtube_widget');
	if ( !is_array($options) )
		$options = array('title'=>'YouTube Feed', 'num'=>1);
	if ( $_POST['youtube-rss-widget-submit'] ) {
		$url = str_replace(' ', '', $_POST['youtube-rss-widget-url']);
		$options['title'] = strip_tags(stripslashes($_POST['youtube-rss-widget-title']));
		$options['url'] = strip_tags(stripslashes($url));
		$options['num'] = strip_tags(stripslashes($_POST['youtube-rss-widget-num']));
		$options['sortorder'] = strip_tags(stripslashes($_POST['youtube-rss-widget-sortorder']));
		$options['type'] = strip_tags(stripslashes($_POST['youtube-rss-widget-type']));
		update_option('youtube_widget', $options);
	}

	$title = empty($options['title']) ? 'YouTube Feed' : $options['title'];
	$num = empty($options['num']) ? 5 : $options['num'];
	$type = empty($options['type']) ? 'user' : $options['type'];
	$sortorder = empty($options['sortorder']) ? 'published' : $options['sortorder'];
	$url = htmlspecialchars($options['url'], ENT_QUOTES);
				
	if ($order == 'random') echo 'selected="selected"';
		echo '
		<label style="line-height: 35px; display: block;" for="youtube-rss-widget-title">' . __('Title:') . '<br/>
		<input style="width: 200px;" id="youtube-rss-widget-title" name="youtube-rss-widget-title" type="text" value="'.$title.'" />
		</label>

		<label style="line-height: 35px; display: block;">' . __('Find videos by:') . '<br/>
		<select name="youtube-rss-widget-type" id="youtube-rss-widget-type">
		<option value="playlist" '.($type=='playlist'?'selected="selected"':'').' >Playlist</option>
		<option value="user" '.($type=='user'?'selected="selected"':'').'>Specific Username</option>
		<option value="favorites" '.($type=='favorites'?'selected="selected"':'').'>Usernames Favorites</option>
		</select>
		</label>
			
		<label style="line-height: 35px; display: block;">' . __('Sort order:') . '<br/>
		<select name="youtube-rss-widget-sortorder" id="youtube-rss-widget-sortorder">
		<option value="published" '.($sortorder=='published'?'selected="selected"':'').' >When published</option>
		<option value="relevance" '.($sortorder=='relevance'?'selected="selected"':'').' >Relevance</option>
		<option value="viewCount" '.($sortorder=='viewCount'?'selected="selected"':'').'>By viewCount</option>
		<option value="rating" '.($sortorder=='rating'?'selected="selected"':'').'>By rating</option>
		</select>
		</label>
			
		<br/>
		<p>
		<b>Specific username:</b> A YouTube username<br/>
		<b>Playlist:</b> The ID of a specific playlist<br/>
		<b>Favorites:</b> A YouTube username<br/>
		</p>

		<label style="line-height: 35px; display: block;" for="youtube-rss-widget-url">
			' . __('Username or Playlist ID:') . '<br/>
				<input style="width: 150px;" id="youtube-rss-widget-url" name="youtube-rss-widget-url" type="text" value="'.$url.'" />
		</label>

		<label style="line-height: 35px; display: block;" for="youtube-rss-widget-num">
				' . __('Max number of videos:') . '<br/>
		<input style="width: 50px;" id="youtube-rss-widget-num" name="youtube-rss-widget-num" type="text" value="'.$num.'" />
		</label>

		<input type="hidden" id="youtube-rss-widget-submit" name="youtube-rss-widget-submit" value="1" />
		';
	}
	
	function youtube_widget_styles () {
		$plugin_url = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
		$css = $plugin_url . 'lib/widget.css';
		wp_register_style('youtube_widget_css', $css);
		wp_enqueue_style( 'youtube_widget_css');
	}
	
	register_sidebar_widget(array('YouTube Widget', 'widgets'), 'youtube_widget');
	register_widget_control(array('YouTube Widget', 'widgets'), 'youtube_widget_control', 350, 150);

	add_action('wp_print_styles', 'youtube_widget_styles');
	
}

add_action('plugins_loaded', 'youtube_widget_init');

?>
