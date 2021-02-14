<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "calculation.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="a">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="b">
    <input type="submit" name="submit" value="равно">
</form>
</body>
</html>
<?php
include VIEWS_DIR . "result.php";
