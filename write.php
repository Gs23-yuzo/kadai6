
<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$birthPlace = $_POST['birthPlace'];
$birthDate = $_POST['birthDate'];
$color = $_POST['color'];

// 記入時間
$time = date('Y/m/d');

// ファイルオープン
$file = fopen('data/data.txt', 'a');

// ファイルに書き込み
fwrite($file, "------------------" . 
    "<br>" . "記入時間：" . $time . 
    "<br>" . "名前：" . $name .
    "<br>" . "性別：" . $sex . 
    "<br>" . "出身地：". $birthPlace .
    "<br>" . "生年月日：". $birthDate .
    "<br>" . "好きな色：". $color ."\n");

// ファイルに保存
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>

    <style>
    table,tr,td,th{
        border: solid 1px black; border-collapse: collapse;
    }
    td,th{
        min-width: 32px;
    }
    th{
        background: silver;
    }
    </style>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
