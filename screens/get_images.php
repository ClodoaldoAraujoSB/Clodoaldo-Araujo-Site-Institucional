<?php
            
    $images = scandir("../img"); // Lista as imagens na pasta
    $images = array_diff($images, array(".", "..")); // Remove "." e ".." da lista
    echo json_encode(array_values($images)); // Retorna as imagens como um JSON            
            
?>