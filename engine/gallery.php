<?php

function getGalleryImages() {
    return queryAll("SELECT * FROM images ORDER BY views DESC ");
}

function getImageById($id) {
    return queryOne("SELECT * FROM images WHERE id = {$id}");
}

function incrementImageViews($id) {
    return execute("UPDATE images SET views = views + 1 WHERE id = {$id}");
}

function createImage($title, $path) {
    $sql = "INSERT INTO images (title, path) VALUES  ('{$title}', '{$path}')";
    return execute($sql);
}