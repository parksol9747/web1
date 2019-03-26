<?php require_once "myFunction.php";?>
<?php require_once "view/view_top.php";?>
<link href="style/baseStyle.css" type="text/css" rel="stylesheet">
<link href="style/myStyle.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="clock.js"></script>

<body onload="printClock()">
	<form action="write_process.php" method="post">
		<div class="Title">
		
			<input type="button" 
			onclick="location.href='mainHome.php'" 
			id="Home">
		
			<div style="grid-area: title_b;">
			<?php echo $_GET['board_id'];?>
			<div id="clock">
				</div>
			</div>
			
			<div id="dropbox">
				<input type="button" value="글쓰기" style="height:30px; width: 100px;"
				onclick="location.href='write_text.php?board_id=<?=$_GET['board_id'];?>'">
				<input type="submit" value="글제출" style="height:30px; width: 100px;">
			</div>
			<input type="hidden" name="board" value=<?=$_GET['board_id'];?>>

		</div>

		<div class="BoardList">
			게시판 목록<br>
			<ol>
		<?php print_boardlist (); ?>
		</ol>
		</div>

		<div class="TextTitle">
			<input style="position: relative; width: 100%; height: 100%;"
				type="text" name="title" placeholder="Write your TEXT TITLE">
		</div>

		<div class="TextContents">
			<textarea style="position: relative; width: 100%; height: 100%;"
				name="description" placeholder="Write your TEXT"></textarea>
		</div>


		<div class="TextList">글 목록</div>
	</form>
</body>

<?php require_once "view/view_bottom.php";?>