<?php
    // Declarando variáveis
    $cidades1 = array('Curitiba', 'Belo Horizonte', 'Vitória', 'Manaus', 'Bonito');
    $cidades2 = array('Porto Alegre', 'Florianópolis', 'João Pessoa', 'Bonito', 'Curitiba');
        
    // Fazendo operações com os arrays
    $intersecaoCidades = array_intersect($cidades1, $cidades2);
    $conjuntoCidades = array_merge($cidades1, $cidades2);

    // Terminando o serviço
    asort($conjuntoCidades);
    print_r($conjuntoCidades);
?>