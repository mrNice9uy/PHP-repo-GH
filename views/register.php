<!doctype html>
<html lang="en"></html>
<?php include VIEWS_DIR . "blocks/head.php"; ?>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <?php render('blocks/menu', ['menu' => $menu]); ?>
        </header>
        <main>
            <h2>Регистрация</h2>
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

                <div class="from-group">
                    <label>
                        Поддверждение пароля
                        <input type="password" name="confirm_password" class="form-control">
                    </label>
                </div>
                <input type="submit" value="Продолжить" class="btn btn-primary">
            </form>
        </main>
    </div>
</div>
</body>
