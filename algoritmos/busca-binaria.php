<?php

function pesquisa_binaria($lista, $item)
{
    $baixo = 0; //primeiro indice do array
    $alto = count($lista) - 1; //ultimo indice do array

    while ($baixo <= $alto) {
        // encontra o indice do meio do array
        $meio = ($baixo + $alto) / 2;

        $chute = $lista[$meio];

        if ($chute === $item) {
            return $meio;
        }

        if ($chute > $item) {
            $alto = $meio -1;
        }else{
            $baixo = $meio +1;
        }

    }
}

var_dump(pesquisa_binaria([1, 2, 3, 4, 5, 6, 7], 7));