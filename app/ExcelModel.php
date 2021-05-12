<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Aqui creo el modelo aKa BDD

class ExcelModel extends Model
{
    
    protected $table = 'dataVehiculo';
    protected $fillable = [
        'id',
        'token',
        'matricula',
        'primerTramite',
        'segundoTramite',
        'tramite',
        'plazo',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
