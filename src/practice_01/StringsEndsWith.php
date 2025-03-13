<?php

namespace Fox\Practice\practice_01;

class StringsEndsWith
{
    /**
     * Método para comparar terminación de strings según cantidad de caracteres
     *
     * @param $string
     * @param $ending
     * @return bool
     */
    public function solution($string, $ending): bool
    {
        // En caso de ser un string vacío, siempre retornará true
        if ($ending === '') return true;

        return substr($string, -strlen($ending)) === $ending;
    }
}
