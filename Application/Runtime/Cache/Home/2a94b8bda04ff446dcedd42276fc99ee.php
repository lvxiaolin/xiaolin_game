<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>小林游戏</title>
<link href="/Public/assets/css/index.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/assets/js/jquery.min.js"></script>
<script>
window.base_url = "/index.php";
</script>
</head>

<body>
<canvas width="100%" height="100%" class="snow"></canvas>
<div class="main" id="fsvs-body">
	<div class="slide">
    	<div class="logo">
        	<img src="/Public/assets/images/logo.png"/>
        </div>
        <div  class="listgame"> 
        </div>
    </div>
    <div style="clear:both"></div>
    <div class="gamedetail slide">       
     </div>

    
</div>
<script src="/Public/assets/js/ToProgress.min.js"></script>
<script type="text/javascript" src="/Public/assets/js/jquery.let_it_snow.js"></script>
<script src="/Public/assets/js/fsvs.js"></script>
<script src="/Public/assets/js/mustache.min.js"></script>
<script src="/Public/assets/js/tem.js"></script>
<script src="/Public/assets/js/core.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	if( $.fn.fsvs ) {
		var slider = $.fn.fsvs({
			speed : 1000,
			bodyID : 'fsvs-body',
			selector : '> .slide',
			beforeSlide : function(data){core.load_page(data)},
			arrowKeyEvents: false,
			mouseWheelEvents: false,
			mouseDragEvents : false,
			touchEvents: false,
			pagination: false,
		});
	}
	window.fsvs = slider;
	slider.init();
	$("canvas.snow").let_it_snow();	
	core.page.game.init();
});
</script>
</body>
</html>