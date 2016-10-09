<?php

?>

<!DOCTYPE html>
<html>
	<?php do_html_head("HOME", 'home.ico', 'home.css', 'home.js', []); ?>

	<body>
		<div id="yang-sys">
			<div id="sys-msg"></div>
			<div id="statusbar"></div>
			<iframe id="app" src="yang-content/app-eg">
				<p>您使用的浏览器不支持。</p>
				<p>Your browser does not support.</p>
			</iframe>
			<div id="app-list"></div>
			<div id="background"></div>
		</div>
	</body>
</html>
