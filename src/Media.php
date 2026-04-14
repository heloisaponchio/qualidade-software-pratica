<?php

class Media {

    public function calcularMedia($notas) {

        $soma = 0;

        foreach ($notas as $nota) {
            $soma += $nota;
        }

        return $soma / count($notas);
    }

}