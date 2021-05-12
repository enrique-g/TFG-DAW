<?php

namespace App\Helpers;
use Carbon\Carbon;

class CommonHelper {

    /**
     * Método que setea la clase active
     *
     * @param [type] $routeName
     * @return void
     */
    public static function setActive($routeName){
        return request()->routeIs($routeName) ? 'active' : '';
    }
    
    //Helper para NO mostrar NUll y format fecha
    public static function getFormatDate($date){

        $formato = Carbon::parse($date)->format('d/m/Y');

        //REVISAR POR AQUI KIKE que el segundo lo pone igual EN EL RETURN
        //Kike: ARREGLADO!

        if($date == NULL || $date =='' || is_null($date)){
            return '01/01/1970';
        }else{
            return $formato;
        }
                
    }
}
