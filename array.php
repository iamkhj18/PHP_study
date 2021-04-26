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
    <h1>Array</h1>
    <?php
        $char = array('A','B','C','D');
        echo $char[1].'<br>';
        echo $char[3].'<br>';
        var_dump(count($char));
        array_push($char, 'E');
        var_dump($char);
    ?>
</body>
</html>