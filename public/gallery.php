<?php
include_once __DIR__. "/../config/main.php";
include_once ENGINE_DIR . "filesystem.php";
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "gallery.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadFile('gallery_image', PUBLIC_DIR . "img");
    // это только загрузка, а не запись в БД
    // Запись в БД. Для этого мы пишем имя файла и путь
    $name = $_FILES['gallery_image']['name'];
    createImage($name, $name);
    // чтобы при обновлении не выполнялся последний запрос (не добавлялись картинки снова и снова)
    header("Location: /gallery.php"); // перенапрвление на страницу - редирект
}

$images = getGalleryImages();
include VIEWS_DIR . "gallery/gallery.php";  // подключаем VIEW только в конце! Все рассчеты до подключения VIEW!
?>
