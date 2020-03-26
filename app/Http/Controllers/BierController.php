<?php

namespace App\Http\Controllers;
use App\Bier;
use App\Biersoort;
use Exception;
use View;
use Illuminate\Http\Request;

class BierController extends Controller
{
    public function index(){
        return view('bier.index')->with('bieren',Bier::all());
    }

    public function show($bierNaam){
        return view('bier.biertjes')->with('bier', Bier::where('naam','=',$bierNaam)->first());
    }

    public function biersoort($bierNaam){
        return Bier::select('naam', 'biersoort')->where('naam', '=', $bierNaam)->get();
    }

    public function biertjes($biersoort){
        return Bier::select('naam')->where('biersoort', '=', $biersoort)->get();
    }

   public function create(){
        return view('bier.create')->with('biersoort', Biersoort::all());
    }

    public function store(Request $request){
        $bier = new Bier();
        $bier->naam = $request->input('naam');
        $bier->merk = $request->input('merk');
        $bier->alcoholpercentage = $request->input('alcoholpercentage');
        $bier->kleur_EBC = $request->input('kleur_EBC');
        $bier->bitter_EBU = $request->input('bitter_EBU');
        $bier->biersoort = $request->input('biersoort');

        try{
            $bier->save();
            return redirect('/bier');
        }
        catch(Excpection $e){
            return redirect('/bier/create');
        }
    }

    public function edit($bierNaam){
        $bier = Bier::find($bierNaam);
        return view('bier.edit')->with('bier', $bier);
    }

    public function update(Request $request, $bierNaam){
        $bier = Bier::where('naam', '=', $bierNaam)->get();
        $bier->naam = $request->input('naam');
        $bier->merk = $request->input('merk');
        $bier->alcoholpercentage = $request->input('alcoholpercentage');
        $bier->kleur_EBC = $request->input('kleur_EBC');
        $bier->bitter_EBU = $request->input('bitter_EBU');
        $bier->biersoort = $request->input('biersoort');

        try{
           Bier::where('naam', '=', $bierNaam)
           ->update([
                'naam' => $request->input('naam'),
                'merk' => $request->input('merk'),
                'alcoholpercentage' => $request->input('alcoholpercentage'),
                'kleur_EBC' => $request->input('kleur_EBC'),
                'bitter_EBU' => $request->input('bitter_EBU'),
                'biersoort' => $request->input('biersoort'),
           ]);
           return redirect('/bier');
        }
        catch(Excpection $e){
            return redirect('/update/{bierNaam}');
        }
    }

    /*public function create()
    {
        return View::make('bier.createOrUpdate');
    }

    public function edit($bierNaam)
    {
        $bierNaam = Bier::find($bierNaam);
        return View::make('bier.createOrUpdate')->with('naam', $bierNaam);
    }*/
}
