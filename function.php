<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html">Home</a>
    <h1>function</h1>
    <?php
        $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Ad nisi magnam dolorem iusto sed sequi reiciendis harum cupiditate deleniti doloribus, ratione facilis a delectus obcaecati tenetur facere velit expedita culpa?";
        echo  $str;
    ?>

    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>
