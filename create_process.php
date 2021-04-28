<<<<<<< HEAD
<?php
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header('Location: /index.php?id='.$_POST['title']);
=======
<?php
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header('Location: /index.php?id='.$_POST['title']);
>>>>>>> ef8f80642e0fc09f227c21cd9cf3a2a530ba2634
?>