<?php
$folder = file_get_contents ( "boardData/" . $_POST ['board'] );
rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
file_put_contents($folder."/".$_POST['title'], $_POST['description']);
header('Location: /board/mainText.php?text_id='.$_POST['title'].'&board_id='.$_POST['board']);
?>