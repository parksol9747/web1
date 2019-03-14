<!DOCTYPE html>

<html>

<head>
    <title>Board</title>
    <meta charset="utf-8">
</head>

<style>
    html{
        width:100%;
        height: 100%;        
    }

    body{
        display: grid;
        width:100%;
        height:100%;
        margin:0px;
        grid-template-areas:
            "a a"
            "b c"
            "b d"
            "b e";
        grid-template-rows: 100px 100px 1fr 100px;
        grid-template-columns: 200px 1fr;    
    }

    form{
        padding: 10px;
        border: 5px red solid;
        margin : 5px;
    }

    .Title{
        text-align: center;
        grid-area: a;

    }

    .BoardList{
        text-align: center;       
        grid-area:b;
    }

    .TextTitle{
        text-align: center;
        grid-area:c;
    }

    .Text{
        text-align: center;
        grid-area:d;
    }

    .TextList{
        text-align: center;
        grid-area:e;
    }

</style>

<body>
    <?php 
        echo date("Y-m-d H:m:s");
        ?>
    <form class = "Title"></form>

    <form class = "BoardList">
        게시판 목록
    </form>

    <form class = "TextTitle">
        글 제목
    </form>

    <form class = "Text">
        글 내용
    </form>

    <form class = "TextList">
        글 목록
    </form>

</body>

</html>