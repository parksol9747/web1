<?php require_once "myFunction.php";?>
<?php require_once "view/view_top.php";?>
<link href="style/baseStyle.css" type="text/css" rel="stylesheet">
<link href="style/boardStyle.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="clock.js"></script>

<body onload="printClock()">
	<form>
	
		<div class="Title">
	
			<input type="button" 
			onclick="location.href='mainHome.php'"
			id="Home">		
			
			<div style="grid-area: title_b;">
			<?php echo $_GET['board_id']?>
					
				<div id="clock">
				</div>
			</div>
			
			<div id="dropbox">
				<input type="button" value="편집" style="height:30px; width: 100px;">
				<div id = "droplist">
					<?php makeButton();?>
				</div>
			</div>
			
		</div>

		<div class="BoardList">
			게시판 목록<br>
			<ol>
		<?php print_boardlist (); ?>
		</ol>
		</div>

		<div class="TextList">
			<ol>
				<?php print_textlist (); ?>
			</ol>
		</div>
	</form>
</body>

<?php require_once "view/view_bottom.php";?>
