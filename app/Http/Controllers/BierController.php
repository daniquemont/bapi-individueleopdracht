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
            return rederict('/bier/create');
        }
    }

    public function edit($bierNaam){
        $bier = Bier::find($bierNaam);
        return view('bier.edit')->with('bier', $bier);
    }

    public function update(Request $request, $bierNaam){
        $request->validate([
            'naam' => 'required',
            'merk' => 'required',
            'alcoholpercentage' => 'required',
            'kleur_EBC' => 'required',
            'bitter_EBU' => 'required',
            'biersoort' => 'required',
        ]);
        $bier = Bier::find($bierNaam);
        $bier->naam = $request->get('naam');
        $bier->merk = $request->get('merk');
        $bier->alcoholpercentage = $request->get('alcoholpercentage');
        $bier->kleur_EBC = $request->get('kleur_EBC');
        $bier->bitter_EBU = $request->get('bitter_EBU');
        $bier->biersoort = $request->get('biersoort');
        $bier->save();
        return rederict('/bier');
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
