<?php
    $nome = 'ildso';
    $sobrenome = 'felpeusi';

    $leiaPolar = ['p', 'o', 'l', 'a', 'r',];
    $substituaPolar = ['t', 'e', 'n', 'i', 's',];

    $novoSobrenome = str_replace($leiaPolar, $substituaPolar, $sobrenome);
    $novoNome = str_replace($leiaPolar, $substituaPolar, $nome);

    if($novoNome !== 'andre') {
        if(str_contains($novoNome, 'i') || str_contains($novoNome, 'l') || str_contains($novoNome, 's')) {
            $novoNome = str_replace('i','a',$novoNome);
            $novoNome = str_replace('l','n',$novoNome);
            $novoNome = str_replace('s','r',$novoNome);
        }
    }

    if($novoSobrenome !== 'fontoura') {
        if(str_contains($novoSobrenome, 'e') || str_contains($novoSobrenome, 's') || str_contains($novoSobrenome, 'i')) {
            $novoSobrenome = str_replace('e','o',$novoSobrenome);
            $novoSobrenome = str_replace('s','r',$novoSobrenome);
            $novoSobrenome = str_replace('i','a',$novoSobrenome);
        }
    }

    echo $novoNome . '<br>';
    echo $novoSobrenome;
?>