<?php
    $images = glob('/media');
    foreach($images as $image){
        echo $image;
    }
?>