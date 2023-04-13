<?php
    // Declarando variáveis
    $nome = 'Rafael';
    $nota1 = 10;
    $nota2 = 10;
    $nota3 = 10;
    $numeroDeNotas = 3;
    $faltas = 30;

    // Cálculos
    $float = ($nota1 + $nota2 + $nota3) / $numeroDeNotas;
    $frequenciaFaltas = (90/100) * $faltas;

    // Função para identificar se foi aprovado ou reprovado
    if($float < 8 || $frequenciaFaltas > 20) {
        echo 'Aluno '. $nome . ' obteve nota ' . number_format($float, 1, ',', ' ') . ' e um total de ' . $frequenciaFaltas . '% de faltas e por isso está REPROVADO!';
    } else {
        echo 'Aluno '. $nome . ' obteve nota ' . number_format($float, 1, ',', ' ') . ' e um total de ' . $frequenciaFaltas . '% de faltas e por isso está APROVADO!';
    }
?>