<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cross site scripting</h1>
    <?php
        echo htmlspecialchars('<script>alert("test");</script>');
    ?>
</body>
=======
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cross site scripting</h1>
    <?php
        echo htmlspecialchars('<script>alert("test");</script>');
    ?>
</body>
>>>>>>> ef8f80642e0fc09f227c21cd9cf3a2a530ba2634
</html>