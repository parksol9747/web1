<?php
$folder = file_get_contents ( "boardData/" . $_POST ['board'] );
file_put_contents($folder. "/" . $_POST['title'], $_POST['description']);
header('Location: /board/mainText.php?text_id='.$_POST['title'].'&board_id='.$_POST['board']);
?>