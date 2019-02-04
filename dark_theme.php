 
 <?php
/*
Plugin Name: Hello World
Description: Echos "Hello World" in footer of theme
Version: 1.0
Author: Chris Cagle
Author URI: http://www.cagintranet.com/
*/
 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

register_script('dark_theme', $SITEURL.'plugins/dark_theme/js/scriptdarktheme.js', '0.1', TRUE);
register_script('dark_theme_style', $SITEURL.'plugins/dark_theme/css/style.css', '0.1', FALSE);

 queue_script ( 'dark_theme' , GSBACK ) ; 
 queue_script ( 'dark_theme_style' , GSBACK ) ; 


# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Dark theme GS ADMIN', 	//Plugin name
	'1.4', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'http://www.multicolor.stargard.pl/', //author website
	'Dark admin theme based on default admin css.php', //Plugin description
	'theme', //page type - on which admin tab to display
	'darktheme'  //main function (administration)
);

// register_script($handle, $src, $ver, $in_footer=FALSE)
// $handle name for the script, must be unique for each script loaded
// $src location of the src for loading
// $ver script version
// $in_footer load the script in the footer if true

# activate filter 
add_action('header','darktheme'); 
add_action('index-login','darktheme'); 

 
# add a link in the admin tab 'theme'
add_action('plugins-sidebar','createSideMenu',array($thisfile,'DARK THEME ACTIVATED <br> by multic0lor'));


# functions
function darktheme() {
include ('dark_theme/css/css.php');
echo ('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
echo ('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">');
echo ('<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Oswald:400,500&amp;subset=latin-ext" rel="stylesheet">
');
}


?>