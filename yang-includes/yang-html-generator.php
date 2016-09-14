<?php

/**
 * 
 */

function do_html_head($title=PROJECT_NAME, $icon="icon.ico", $style, $script, $keywords=["YangPHP"]){
	$title = is_string($title) ? $title : PROJECT_NAME;
	if($icon == "")
		$icon = "icon.ico";
	$icon = get_root()."/yang-content/img/".$icon;
	$keyword = join($keywords, " ");
?>
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="icon" type="image/x-icon" href="<?php echo $icon ?>">
		<meta name="keywords" content="<?php echo $keyword ?>">
		<meta name="description" content="yangphp">
		<?php load_css($style); load_js($script); ?>
		<title><?php echo $title ?></title>
	</head>
<?php
}

function do_html_body(){

}

