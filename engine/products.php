<?php
require_once ENGINE_DIR . "db.php";

function getProducts(array $ids = [])
{
    $where = '';
    if(!empty($ids)) {
        $in = implode(', ', $ids);
        $where = "WHERE id IN ($in)";
    }
    return queryAll("SELECT * FROM products {$where}");
}

function getProductById($id)
{
    return queryOne("SELECT * FROM products WHERE id = {$id}");
}

function createProduct(
    $title,
    $description,
    $price
) {
    $sql = "INSERT INTO products (title, description, price)
            VALUES ('{$title}','{$description}','{$price}')";
    execute($sql);
    return getLastInsertId();
}

function updateProductById(
    $id,
    $title = null,
    $description = null,
    $price = null
) {
    $updateSection = [];

    if(!is_null($title)) {
        $updateSection[] = "title = '{$title}'";
    }

    if(!is_null($description)) {
        $updateSection[] = "description = '{$description}'";
    }

    if(!is_null($price)) {
        $updateSection[] = "price = {$price}";
    }

    if(!empty($updateSection)) {
        $updateSection = implode(", ", $updateSection);
        return execute("UPDATE products SET {$updateSection} WHERE id = {$id}");
    }
    return null;
}

function deleteProduct($productId) {
    return execute("DELETE FROM products WHERE id = {$productId}");
}
