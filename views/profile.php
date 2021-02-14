<!doctype html>
<html lang="en">
<?php include  VIEWS_DIR . "blocks/head.php"; ?>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <?php render('blocks/menu', ['menu' => $menu]); ?>
        </header>
        <main>
            Привет, <?=$user['login']?>!
        </main>
        <footer></footer>
    </div>
</div>
</body>
</html>
