<?php
    // Declarando variáveis
    $nome = 'tenis';
    $sobrenome = 'polar';

    // Declarando substituições
    $leiaPolar = ['p', 'o', 'l', 'a', 'r',];
    $substituaPolar = ['t', 'e', 'n', 'i', 's',];

    $leiaTenis = ['t', 'e', 'n', 'i', 's',];
    $substituaTenis = ['p', 'o', 'l', 'a', 'r',];

    // Substituindo valores
    $novoSobrenome = str_replace($leiaPolar, $substituaPolar, $sobrenome);
    $novoNome = str_replace($leiaTenis, $substituaTenis, $nome);
    
    // Exibindo resultados
    echo $novoNome . '<br>';
    echo $novoSobrenome;
?>