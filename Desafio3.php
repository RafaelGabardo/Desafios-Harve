<?php
    $nome = 'Rafael';
    $nota1 = 9;
    $nota2 = 4;
    $nota3 = 8;
    $numeroDeNotas = 3;
    $faltas = 30;

    $float = ($nota1 + $nota2 + $nota3) / $numeroDeNotas;

    if($faltas === 0) {
        $frequencia = 0;
    } else {
        $frequencia = ($faltas/90) * 100;
    }


    if($float < 8 || $frequencia < 20) {
        echo 'Aluno '. $nome . ' obteve nota ' . number_format($float, 1, ',', ' ') . ' e um total de ' . number_format($frequencia, 1, ',', ' ') . '% de faltas e por isso está REPROVADO!';
    } else {
        echo 'Aluno '. $nome . ' obteve nota ' . number_format($float, 1, ',', ' ') . ' e um total de ' . number_format($frequencia, 1, ',', ' ') . '% de faltas e por isso está APROVADO!';
    }
?>