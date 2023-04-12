<?php
    $nome = 'tenis';
    $sobrenome = 'polar';

    $leiaPolar = ['p', 'o', 'l', 'a', 'r',];
    $substituaPolar = ['t', 'e', 'n', 'i', 's',];

    $leiaTenis = ['t', 'e', 'n', 'i', 's',];
    $substituaTenis = ['p', 'o', 'l', 'a', 'r',];

    $novoSobrenome = str_replace($leiaTenis, $substituaTenis, $sobrenome);
    $novoNome = str_replace($leiaPolar, $substituaPolar, $nome);
    
    echo $novoNome . '<br>';
    echo $novoSobrenome;
?>