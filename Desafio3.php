<?php
    // Declarando as variáveis
    $nome = 'Rafael';
    $nota1 = 9;
    $nota2 = 10;
    $nota3 = 8;
    $numeroDeNotas = 3;
    $aulasFrequentadas = 19;
    $aulas = 90;

    // Fazendo o cálculo da nota
    $notaFinal = ($nota1 + $nota2 + $nota3) / $numeroDeNotas;
    $notaArredondada = round($notaFinal, 0);

    // Fazendo o cálculo da frequência
    if($aulasFrequentadas === 0) {
        $frequencia = 0;
    } else {
        $frequencia = ($aulasFrequentadas/$aulas) * 100;
        $frequencia = round($frequencia, 0);
    }

    // Finalizando o serviço
    if($notaArredondada < 8 || $frequencia < 20) {
        echo 'Aluno '. $nome . ' obteve nota ' . $notaArredondada . ' e um total de ' . $frequencia . '% de faltas e por isso está APROVADO!';
    } else {
        echo 'Aluno '. $nome . ' obteve nota ' . $notaArredondada . ' e um total de ' . $frequencia . '% de faltas e por isso está REPROVADO!';
    }
?>