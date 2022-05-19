<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        <br>
        性別：<input type="radio" name="sex" value="その他">その他
             <input type="radio" name="sex" value="女">女
             <input type="radio" name="sex" value="男">男
        <br>
         出身: <input type="text" name="birthPlace">
        <br>
         生年月日：<input type="date" name="birthDate">
        <br>
        好きな色：<input type="color" name="color" >
        <br>
         <input type="submit" value="送信">
    </form>
</body>

</html>
