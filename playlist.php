<?php
/**
 * @package Mp3Quran Translations by TrueMuslims.Net
 * @version 1.0.1
 */
/*
 Plugin Name: Mp3Quran English Translation By TrueMuslims.Net 
 Plugin URI: http://www.truemuslims.net
 Description: Mp3Quran English Translations plugin is the WordPress plugin that allows you to display a playlist for the Quran English translations to understand the meaning of Quran.
 Version: 1.0.1
Author: TrueMuslims.Net IT Support
Author URI: http://truemuslims.net
 License: It is Free -_-
this information for playlist.php
*/
include('functions.php');
register_activation_hook(__FILE__,'mp3_playlist_plugin_install'); 

function mp3_playlist_plugin_scripts(){
	wp_register_script('mp3_playlist_plugin_scripts',plugin_dir_url( __FILE__ ).'js/js.js');
	wp_enqueue_script('mp3_playlist_plugin_scripts');
}
add_action('wp_enqueue_scripts','mp3_playlist_plugin_scripts'); 

function mp3_playlist_plugin_styles() {
	wp_register_style( 'mp3-playlist-styles', plugin_dir_url( __FILE__ ).'style.css' );
	wp_enqueue_style( 'mp3-playlist-styles' );
}
add_action( 'wp_enqueue_scripts', 'mp3_playlist_plugin_styles' );

//$language_id = get_option('mp3_playlist_form');
add_filter('plugin_action_links_mp3-quran/playlist.php', 'mp3_playlist_action_links');
function mp3_playlist_action_links($links)
{
	$mp3_links = array(
		'<a href="' . admin_url('admin.php?page=mp3-playlist-edit') . '">Settings</a>'
	);
	return array_merge($links, $mp3_links);
}
function mp3Translations_sounds_loop($language_id=1){
	global $sora_names;
	$language_id = strip_tags($language_id);
	$moshafcount = count(mp3Translations_get_languages('', '', 1));
	$nl = "\n";

	$code = '';

	if($language_id > $moshafcount){
		$code .= '<p>Not found this id <strong>'.intval($language_id).'</strong></p>';
	}else{
		$id = mp3Translations_get_languages($language_id,"id");
		$mp3Translationsgetsounds = mp3Translations_get_sounds($id);

		$arrayname = mp3Translations_get_sounds($id);
		$mp3Translationscountsounds = count($mp3Translationsgetsounds);
		$countsounds = count($mp3Translationsgetsounds);


		$show_playlist_rss = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"Twitter").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/twitter.png" alt="'.mp3Translations_get_languages($language_id,"title").' Twitter" title="Follow Us On Twitter" /></a>'; 
		$show_playlist_podcast = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"Facebook").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/facebook.png" alt="'.mp3Translations_get_languages($language_id,"title").' Facebook" title="Like Our Facebook Page" /></a>'; 
		$show_playlist_txt = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"G+").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/google+.png" alt="'.mp3Translations_get_languages($language_id,"title").' G+" title="Follow Us On G+ Page" /></a>'; 
		$show_playlist_MediaPlayer = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"Youtube").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/youtube.png" alt="'.mp3Translations_get_languages($language_id,"title").' Youtube" title="Subscribe With Our Channel On Youtube" /></a>'; 
		$show_playlist_QuickTime = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"Android").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/Android.png" alt="'.mp3Translations_get_languages($language_id,"title").' Android" title="Android Apps On Google Play" /></a>'; 
		$show_playlist_realplayer = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"Apple").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/Apple.png" alt="'.mp3Translations_get_languages($language_id,"title").' Apple" title="iOS Apps On Apple Store" /></a>'; 
		$show_playlist_Winamp = '<a target="_blank" href="'.mp3Translations_get_languages($language_id,"MS").'"><img src="'.trailingslashit(plugins_url(null,__FILE__)).'images/Microsoft-Store.png" alt="'.mp3Translations_get_languages($language_id,"title").' MS" title="Window Mobile Apps On Microsoft Store" /></a>'; 

		$pdf = $show_playlist_rss; 
		$rss = $show_playlist_podcast; 
		$podcast = $show_playlist_txt; 
		$txt = $show_playlist_MediaPlayer; 
		$mediaplayer = $show_playlist_QuickTime; 
		$quicktime = $show_playlist_realplayer; 
		$realplayer = $show_playlist_Winamp; 

		$img = ''.trailingslashit(plugins_url(null,__FILE__)).'images/Download-file.png';

		$code .= '<div class="view_all_surh">';
		$code .= '<div class="icons">'.$mediaplayer.' '.$quicktime.' '.$realplayer.' '.$pdf.' '.$rss.' '.$podcast.' '.$txt.' </div>'.$nl;
		if(mp3Translations_get_languages($language_id,"language") == mp3Translations_get_languages($language_id,"title")){
			$code .= '<h2>'.mp3Translations_get_languages($language_id,"title").'</h2>'.$nl;
		}else{
			$code .= '<h1>'.mp3Translations_get_languages($language_id,"language").' - '.mp3Translations_get_languages($language_id,"title").'</h1>'.$nl;
		}
		$code .= '<ul>'.$nl;
		for ($i=0; $i<$countsounds; $i++) {
			if($countsounds == $i+1){ $addcomma = ''; }else{ $addcomma = ','; }

			if (is_numeric($arrayname[$i][0])) { $surhname = $sora_names[$arrayname[$i][0]]; $suranid = $arrayname[$i][0]; }else{ $surhname = $arrayname[$i][0]; $suranid = $i+1; }

			$code .= '<li id="element'.$suranid.'" onClick="javascript:changeText('.$suranid.', \''.$surhname.'\', \''.$arrayname[$i][1].'\', \''.$img.'\')">'.$suranid.'- '.$surhname.'</li>'.$nl;
		}
		$code .= '</ul>'.$nl;
		$code .= '</div>'.$nl;
	}

	return $code;
}

function mp3_playlist_content_replace ($text){
$text = preg_replace('/mp3_playlist\[([0-9]*?)\]/e','mp3Translations_sounds_loop(\\1)',$text);
return $text;
	
}

add_filter('the_content','mp3_playlist_content_replace');

add_action( 'admin_menu', 'mp3_playlist_menu' );

function mp3_playlist_menu() {
	add_menu_page( 'Mp3 Quran', 'Mp3 Quran', 'manage_options', 'mp3-playlist-edit', 'mp3_playlist_options', ''.trailingslashit(plugins_url(null,__FILE__)).'/images/quran.png' );
}

function mp3_playlist_options() {
	global $languages;
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}


	$playlist_title = strip_tags(get_option('playlist_title'));
	?>
	<div id="mainblock" class="submit">
		<div class="dbx-content" style="background-color:#ffffff; border:1px solid #cccccc; padding:5px; text-align:center;">				
			
			<?php
			echo "<h4>Mp3 Quran Translation By TrueMuslims.Net </h4>";
			echo '<div style="background-color:#333333; border:1px solid #cccccc; color:#ffffff; padding:5px; margin:10px 20px 10px 0;">Copy shortcode <span style="color:yellow;">mp3_playlist[1]</span> and paste in post/page.</div>'; 
			
			?>
		</div>   
	</div>
	

	
	<?php
}
?>