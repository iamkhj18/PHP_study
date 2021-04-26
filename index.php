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
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
            $list = scandir('data');
        ?>
    </ol>
    <h2>
        <?php
            if(isset($_GET['id'])){
                echo $_GET['id'];
            }else {
                echo "Welcome";
            }              
        ?>
    </h2>
    <?php
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        }else{
            echo "Hello, PHP";
        }
    ?>
</body>
</html>