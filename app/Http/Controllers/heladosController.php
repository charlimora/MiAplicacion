<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladosController extends Controller
{

    public function helado($opc){

       // if ( $opc>=1 && $opc <=3 ){}
       if ($opc == 1 || $opc == 2 || $opc ==3){
            //se recomienda inicializar las variables
            $valorHelado = 3000;
            $valorTopping = 0;
            $topping = '';
            $valorTotal = 0;

        //1) programo la opción chocolate
            if($opc == 1){
                $valorTopping = 500;
                $topping = 'chocolate';
            }

            elseif($opc == 2){

            }

        $valorTotal = $valorHelado + $valorTopping;
        return 'El topping escogido es: ' . $topping . ' y su precio es ' . $valorTopping . ' El valor total a pagar es: ' . $valorTotal;

       }

       else{
           return 'Opción no válida';
       }
    } //cierre del método
} //cierre de la clase
