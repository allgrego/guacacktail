<?php

namespace App\Custom;



class DestiledFuncs
{
    public static function getDestiladosList(){
        $destilados = array(
            'rum',
            //'whisky',
            'beer',
            'wine',
            'gin',
            'vodka',
            'tequila'
        );
        return $destilados;
    }
}
