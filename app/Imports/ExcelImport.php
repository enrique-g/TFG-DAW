<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use Carbon\Carbon;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet;
   //\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject para parsear

use App\ExcelModel;



class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collections)
    {
     
        foreach($collections as $key=>$collection) {
            
            if($key !=0){
                 //dd($collection);
                $getInfoExcelModel = ExcelModel::where('matricula', $collection[0])->first();
                $date1 = Carbon::parse(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($collection[1]))->format('Y-m-d');
                $date2 = Carbon::parse(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($collection[2]))->format('Y-m-d');

                //Este era el problema con la ultima actualizacion de Laravel , de manera que resolví el parseado directamente aqui Y FUNCIONA! NO TOCAR

                if($getInfoExcelModel) {
                    $data = [
                        'primerTramite' => ($collection[1] == '' || $collection[1] == NULL || is_null($collection[1]))? NULL : $date1,
                        'segundoTramite'=> ($collection[2] == '' || $collection[2] == NULL || is_null($collection[2]))? NULL : $date2,
                        'tramite'=> $collection[3],
                        'plazo'=> $collection[4]
                    ];

                    $getInfoExcelModel->update($data);
                } else {

                    $data = [
                        'token' => Str::random(30),
                        'matricula' => $collection[0],
                        'primerTramite' => ($collection[1] == '' || $collection[1] == NULL || is_null($collection[1]))? NULL : $date1,
                        'segundoTramite'=> ($collection[2] == '' || $collection[2] == NULL || is_null($collection[2]))? NULL : $date2,
                        'tramite'=> $collection[3],
                        'plazo'=> $collection[4]
                    ];

                    ExcelModel::create($data);
                }

            }
        } 
        

    }

}
