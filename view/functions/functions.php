<!-- MAIN TEMPLATE FUNCTIONS FILE -->
<?php 

$def_template_vars = array(

	'page_title' 	=>	'Alex Brown PHP MVC Framework',
	'content'		=>	'PHP MVC Framework Tutorial'
	
	);
	
function default_var($varget){
	global $def_template_vars;
	return $def_template_vars[$varget];
}

function default_var_set($varset,$val){
	global $def_template_vars;
	$def_template_vars[$varset] === $val;
}

function get_pub_loc($pub_req){
	global $default_location_public;
	return $default_location_public[$pub_req];
}
function get_pri_loc($pri_req){
	global $default_location_private;
	return $default_location_private[$pri_req];
}

function get_header(){
	include_once(get_pri_loc('TEMPLATE').'header.php');	
}

function get_footer(){
	include_once(get_pri_loc('TEMPLATE').'footer.php');	
}

function get_title(){
	global $def_template_vars;
	
	echo $def_template_vars['page_title'];
}

function get_content(){
	global $def_template_vars;
	echo "CONTENT";
	echo $def_template_vars['content'];
}

function get_style_sheets(){
	echo '<link href="'.get_pub_loc('CSS').DS.'bootstrap.css" rel="stylesheet">';
    echo '<link href="'.get_pub_loc('CSS').DS.'bootstrap-responsive.css" rel="stylesheet">';
}

function get_js(){
	
	echo '<script src="'.get_pub_loc('JS').DS.'jquery.js"></script>';
	//echo '<script src="'.get_pub_loc('JS').DS.'api.backbone.js"></script>';
	echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-transition.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-alert.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-modal.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-dropdown.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-scrollspy.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-tab.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-tooltip.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-popover.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-button.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-collapse.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-carousel.js"></script>';
    echo '<script src="'.get_pub_loc('JS').DS.'bootstrap-typeahead.js"></script>';
	
}

