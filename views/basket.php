<!doctype html>
<html lang="en">
<?php include VIEWS_DIR . "blocks/head.php"; ?>
<body>
<div class="row justify-content-center">
    <div class="col-md-6">
        <header>
            <?php include VIEWS_DIR . "blocks/menu.php"; ?>
        </header>
        <main>
            <h2>Товары в корзине</h2>
            <?php if (empty($basket)): ?>
                <p>Корзина пуста</p>
            <?php else: ?>
                <table class="table">
                    <?php foreach ($basket as $item): ?>
                        <tr>
                            <td>
                                <?= $item['product']['title'] ?>
                            </td>
                            <td>
                                <?= $item['qty'] ?>
                            </td>
                            <td>
                                <a href="/remove_from_basket.php?id=<?=$item['product']['id'] ?>"
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </main>
        <footer></footer>
    </div>
</div>
</body>
</html>