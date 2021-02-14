<?php
foreach ($images as $image) :
    $imgUrl = "/photo.php?id={$image['id']}";
    ?>
    <a href="<?=$imgUrl?>">
        <img src="/img/<?=$image['path']?>" width="200" alt="photo">
    </a>
<? endforeach;?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="gallery_image">
    <input type="submit">
</form>