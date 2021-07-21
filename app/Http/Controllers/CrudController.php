<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index (){
        return "ini dengan controller dengan method index";
    }

    public function edit (){
        return"ini methode edit";
    }
}
