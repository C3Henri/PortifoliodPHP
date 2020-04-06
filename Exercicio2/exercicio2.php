<?php

    //laço contandando até dar 100
    for($i= 1; $i <= 100; $i++){

        $verifi = 0;
        //verifica se o divisor chegou até 1 para parar de dividir
        for($mod = $i; $mod >= 1; $mod--){
            //realiza a divisao e verifica se o resto é igual a zero
            if (($i % $mod) == 0){
                //caso o resto seja 0 ele armazera na variavel "$verifi"
                $verifi++;
            }
        }

        //se tiver a 2 divisores com resto 0 ele mostra
        if ($verifi == 2){
            echo $i . ', ';
        }
    }
 
?> 