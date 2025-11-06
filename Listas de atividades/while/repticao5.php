<?php

    $palavras = array("nossa","voce","sabia","que","ou");

    foreach ($palavras as $palavra) {
        $quantidade_caracteres = strlen($palavra);
        
        echo "A palavra $palavra tem $quantidade_caracteres caracteres.<br>";
    }
?>