<?php
function print_boardlist() {
	$list = scandir ( 'boardData' );
	$i = 0;
	while ( $i < count ( $list ) ) {
		if (($list [$i] != '.') && ($list [$i] != '..')) {
			?>
<li><a href="mainBoard.php?board_id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
<?php
		}
		$i = $i + 1;
	}
}
?>


<?php
function print_textlist() {
	$folder = file_get_contents ( "boardData/" . $_GET ['board_id'] );
	$list = scandir ( $folder );
	$i = 0;
	while ( $i < count ( $list ) ) {
		if (($list [$i] != '.') && ($list [$i] != '..')) {
			?>
<li><a href="mainText.php?text_id=<?=$list[$i]?>&board_id=<?=$_GET ['board_id']?>"><?=$list[$i]?></a></li>
<?php
		}
		$i = $i + 1;
	}
}
?>


<?php
function print_text() {
	if (! (isset ( $_GET ['text_id'] )))
		echo "<h2>WEB!!</h2>";
	else
		echo "<h2>" . $_GET ['text_id'] . " 설명</h2>";

	if (isset ( $_GET ['text_id'] )) {
		echo file_get_contents ( file_get_contents( "boardData/" . $_GET ['board_id'] ) . "/" . $_GET ['text_id'] );
	}
}


function print_texttitle() {
	if (! (isset ( $_GET ['text_id'] )))
		echo "WEB!!";
	else
		echo $_GET ['text_id'] . " 설명";
}

?>

<?php
function makeButton() {
	if ((isset ( $_GET ['board_id'] ))) {
		?>
<input type="button" value="글쓰기"
	style="height: 30px; width: 100px;"
	onclick="location.href='write_text.php?board_id=<?=$_GET['board_id']?>'">
<?php //글쓰기 버튼

}
	if ((isset ( $_GET ['text_id'] )) && (isset ( $_GET ['board_id'] ))) {
		?>
<input type="button" value="글수정"
	style="height: 30px; width: 100px;"
	onclick="location.href='update_text.php?board_id=<?=$_GET['board_id']?>&text_id=<?=$_GET['text_id']?>'">
<?php //글수정 버튼

}
	if ((isset ( $_GET ['text_id'] )) && (isset ( $_GET ['board_id'] ))) {
		?>
<input type="button" value="글삭제"
	style="height: 30px; width: 100px;"
	onclick="location.href='delete_text.php?text_id=<?=$_GET['board_id']?>&text_id=<?=$_GET['text_id']?>'">
<?php //글삭제 버튼
	}

	if (!(isset ( $_GET ['board_id'] ))) {
		header ( 'Location: /board/mainHome.php' );
	}
}
?>