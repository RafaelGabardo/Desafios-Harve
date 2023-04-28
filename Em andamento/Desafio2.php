<?php
    // Algo está errado e eu não sei o que é, alguém me ajuda por favor

    // Declarando variáveis que serão descriptografadas
    $name = 'tenis';
    $surname = 'polar';

    // Declarando variáveis para descriptografar
    $substitute1 = [
        't'=> 'p',
        'e' => 'o',
        'n' => 'l',
        'i' => 'a',
        's' => 'r',
    ];

    $substitute2 = [
        'p' => 't',
        'o' => 'e',
        'l' => 'n',
        'a' => 'i',
        'r' => 's',
    ];

    // Declarando a função para descriptografar
    function decrypt($name, $surname) {
        // Declarando as variáveis de descriptografia
        $decryptedName = '';
        $decryptedSurname = '';

        // Fazendo o "se-se não" para garantir que irá descriptografar a primeira variável
        if($name !== $surname) {
            // Usando a função "para" como método de descriptografia
            for($i = 0; $i < strlen($name); $i++) {
                $char = $name[$i];
    
                if(isset($substitute1[$char])) {
                    $decryptedName .= $substitute1[$char];
                } else {
                    $decryptedName .= $char;
                }
            }
        // Usando o "se não" caso não cumpra com a condição do "se"
        } else {
            for($i = 0; $i < strlen($surname); $i++) {
                $char = $surname[$i];
    
                if(isset($substitute2[$char])) {
                    $decryptedSurname .= $substitute2[$char];
                } else {
                    $decryptedSurname .= $char;
                }
            }
        }
        
        // Usando outro "se-se não" para descriptografar a segunda variável
        if($decryptedName === $surname) {
            // Usando a função "para" como método de descriptografia
            for($i = 0; $i < strlen($surname); $i++) {
                $char = $surname[$i];
    
                if(isset($substitute2[$char])) {
                    $decryptedSurname .= $substitute2[$char];
                } else {
                    $decryptedSurname .= $char;
                }
            }
        // Usando o "se não" caso não cumpra com a condição do "se"
        } else {
            for($i = 0; $i < strlen($name); $i++) {
                $char = $name[$i];
    
                if(isset($substitute1[$char])) {
                    $decryptedName .= $substitute1[$char];
                } else {
                    $decryptedName .= $char;
                }
            }
        }

        // Retornando as variáveis depois da descriptografia
        return $decryptedName;
        return $decryptedSurname;
    }

    // Exibindo o resultado na tela
    echo decrypt($name, $surname);
?>