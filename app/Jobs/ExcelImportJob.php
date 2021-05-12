<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Excel;
use App\ExcelModel;


use App\Imports\ExcelImport;

class ExcelImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Hay que poner esto para que no nos deje bucle,no se muy bien el porqué, pero "Es así"... 
        ini_set('memory_limit', '-1');
        set_time_limit(0);

        \Config::set('excel.imports.delimiter', ";"); // Excels
        // \Config::set('excel.imports.csv.delimiter', ";"); // CSV
        //Dejo la opcion de CSV habilitada por si lo pidieran más adelante (Aunque lo dudo)


        // Buscamos y leemos el fichero
        
        $file = storage_path('app/public/archivos/documentacion.xlsx');
        // dd($file); 
        Excel::import(new ExcelImport(), $file);

    }
}
