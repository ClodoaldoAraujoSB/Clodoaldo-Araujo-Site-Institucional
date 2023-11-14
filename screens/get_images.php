<?php

    $imageDir = '../img/';
    $files = scandir($imageDir);
    $images = array_values(array_diff($files, array('..', '.')));

    // Divida os nomes dos arquivos em quatro arrays
    $arrays = array_fill(0, 4, array());
    foreach ($images as $index => $image) {
        array_push($arrays[$index % 4], $image);
    }

    echo json_encode($arrays);         
            
?>