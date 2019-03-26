<?php require_once "myFunction.php";?>
<?php require_once "view/view_top.php";?>
<link href="style/baseStyle.css" type="text/css" rel="stylesheet">
<link href="style/homeStyle.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="clock.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="178439367580-l0oj544gtpnbibk79j5p6np1d85r51rh.apps.googleusercontent.com">

<body onload="printClock()">
	<form>
		<div class="Title">
			<input type="button" 
				onclick="location.href='mainHome.php'" 
				id="Home">	
		
			<div style="grid-area: title_b;">
			<div class="g-signin2" data-onsuccess="onSignIn"></div>
			홈페이지
				<div id="clock">
				</div>
			</div>
		</div>

		<div class="BoardList">
			게시판 목록<br>
			<ol>
		<?php print_boardlist(); ?>
		</ol>
		</div>
		
		<div class="HomeContents">
			홈페이지 내용
		</div>
	</form>
</body>
<?php require_once "view/view_bottom.php";?>
