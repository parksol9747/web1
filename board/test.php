<?php
function makeButton() {
	if ((isset ( $_GET ['board_id'] ))) {
		?>
<input type="button" value="글쓰기" style="height: 30px; width: 100px;"
	onclick="location.href='write_text.php?board_id=<?=$_GET['board_id']?>'">
<?php
	}
	if ((isset ( $_GET ['text_id'] )) && (isset ( $_GET ['board_id'] ))) {
		?>
<input type="button" value="글수정" style="height: 30px; width: 100px;"
	onclick="location.href='update_text.php?board_id=<?=$_GET['board_id']?>&text_id=<?=$_GET['text_id']?>'">
<?php
	}
	if ((isset ( $_GET ['text_id'] )) && (isset ( $_GET ['board_id'] ))) {
		?>
<input type="button" value="글삭제" style="height: 30px; width: 100px;"
	onclick="location.href='delete_text.php?text_id=<?=$_GET['board_id']?>&text_id=<?=$_GET['text_id']?>'">
<?php
	}

	if (! (isset ( $_GET ['text_id'] )) && ! (isset ( $_GET ['board_id'] ))) {
		header ( 'Location: /board/mainHome.php' );
	}
}
?>