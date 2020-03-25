<?php

namespace App\Http\Controllers;

use App\Biersoort;
use Illuminate\Http\Request;

class BiersoortController extends Controller
{
    public function index(){
        return Biersoort::all();
    }

    public function show($biersoort){
        return Biersoort::where('naam', '=', $biersoort)->first();
    }
}
