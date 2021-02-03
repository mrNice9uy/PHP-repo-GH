<?php
foreach ($images as $image) :
    $imgUrl = "/img/{$image}";
    ?>
    <a href="<?=$imgUrl?>" target='_blank'>
        <img src="<?=$imgUrl?>" width="200" alt="photo">
    </a>
<? endforeach;?>