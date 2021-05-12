<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExcellController;
use App\Http\Controllers\MessageController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/informacion', [HomeController::class, 'about'])->name('about');
Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'legal'], function() {
    Route::get('/terminos', [HomeController::class, 'terminos'])->name('terminos');
    Route::get('/aviso-legal', [HomeController::class, 'legal'])->name('legal');
});

//RUTA PARA RECIBIR POR POST EL FORM DEL BLADE CONTACT
Route::group(['prefix' => 'save'], function() {
    Route::post('/send-form', [MessageController::class, 'store'])->name('messages.store');
});

//Ruta de resultado busqueda matricula
//Javi agrego las rutas en group para poder controlarlas mejor ;)
Route::group(['prefix' => 'result'], function() {
    Route::post('/informacion', [ExcellController::class, 'index'])->name('excel.index'); // Formulario
    Route::get('/excel/upload', [ExcellController::class, 'upload'])->name('upload.file'); // Formulario cargar NO, porque yo con job absorbo al final
});
