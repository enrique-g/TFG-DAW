<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Imports
use App\Imports\ExcelImport;

// Jobs
use App\Jobs\ExcelImportJob;

// Models
use App\ExcelModel;

// Librerias
use Excel;

class ExcellController extends Controller
{

    /**
     * Ruta de la vista
     *
     * @return void
     */
    public function index(Request $request) {
        $getMatricula = ExcelModel::where('matricula', $request->matricula)->first();
        return view('excel.index', compact('getMatricula'));
    }


    /**
     * Funcion de subida de archivo
     *
     * @param Request $request
     * @return void
     */
    public function upload(Request $request) {
        dispatch(new ExcelImportJob())->onQueue('read_file_excel');
        return back()->with('success','Job ejecutado Correctamente');
    }

}

