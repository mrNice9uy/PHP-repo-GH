<!doctype html>
<html lang="en">
<?php include VIEWS_DIR . "blocks/head.php"; ?>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <?php render('blocks/menu', ['menu' => $menu]); ?>
        </header>
        <main>
            <h2>Вход</h2>
            <form action="" method="post">
                <div class="from-group">
                    <label>
                        Логин
                        <input type="text" name="login" class="form-control">
                    </label>
                </div>

                <div class="from-group">
                    <label>
                        Пароль
                        <input type="password" name="password" class="form-control">
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="submit" value="Войти" class="btn btn-primary">
                    </label>
                </div>
            </form>
        </main>
        <footer></footer>
    </div>
</div>
</body>
</html>
