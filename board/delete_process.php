<?php
$folder = file_get_contents ( "boardData/" . $_POST ['board'] );
unlink($folder. "/" . $_POST['title']);
header('Location: /board/mainBoard.php?board_id='.$_POST['board']);
?>