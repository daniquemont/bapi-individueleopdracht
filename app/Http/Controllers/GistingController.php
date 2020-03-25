<?php

namespace App\Http\Controllers;

use App\Gisting;
use Illuminate\Http\Request;

class GistingController extends Controller
{
    public function index(){
        return Gisting::all();
    }

    public function biersoorten($gisting){
        return Gisting::where('gisting', '=', $gisting)->first()->getBiersoorten;
    }

    public function show($gisting){
        return Gisting::where('gisting', '=', $gisting)->first();
    }
}
