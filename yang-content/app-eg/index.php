<?php

if(!isset($yang_config)){ //if yang-config.php didn't require
	require_once('C:\xampp\htdocs\yangphp\yang-config.php'); // than require~

	if(get_session('valid_user')!=null){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">

	<link type="text/css" rel="stylesheet" href="index.css">
	<link type="text/css" rel="stylesheet" href="js/w2ui/w2ui-1.4.3.css" />


	<title>淘文档</title>
</head>

<body>
	<h1>知识库检索</h1>
	<p><b>备注：</b></p>
	<p>输入关键字之后点击“搜索”。暂时不支持回车键快捷搜索。</p>
	<p>搜索结果每次只显示50条，点击表格底部数字键可翻页查看。</p>
	<div class="query-container">
		关键字：<input type="text" id="query" >
		<input type="button" id="query-btn" value="搜索" >
		<div class="w2ui-grid" id="result"></div>
	</div>

	<div id="numFound"></div>
	<div id="start"></div>
	<p>Base on Solr, Thanks Apache.</p>
	<p>Yangholmes</p>

	<script src="js/jquery-2.1.1.js"></script>
    <script src="js/w2ui/w2ui-1.4.3.min.js"></script>
	<script src="index.js"></script>

</body>

</html>
<?php
	}
	else{
		yang_exit('您尚未登陆', null, '拒绝访问');
	}
}
