<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Método que devuelve la vista correspondiente
     *
     * @return void
     */
    public function home(){
        return view('home');
    }

    /**
     * Método que devuelve la vista correspondiente
     *
     * @return void
     */
    public function about() {
        return view('about');
    }

    /**
     * Método que devuelve la vista correspondiente
     *
     * @return void
     */
    public function contact() {
        return view('contact');
    }

    /**
     * Método que devuelve la vista correspondiente
     *
     * @return void
     */
    public function terminos() {
        return view('terms');
    }

    /**
     * Método que devuelve la vista correspondiente
     *
     * @return void
     */
    public function legal() {
        return view('legal');
    }


}
