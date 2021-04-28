<<<<<<< HEAD
<?php
    require('lib/print.php');
    require('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>

    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title" placeholder="title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="description" placeholder="description"><?php print_description(); ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
<?php
    require('view/bottom.php');
=======
<?php
    require('lib/print.php');
    require('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>

    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title" placeholder="title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="description" placeholder="description"><?php print_description(); ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
<?php
    require('view/bottom.php');
>>>>>>> ef8f80642e0fc09f227c21cd9cf3a2a530ba2634
?>