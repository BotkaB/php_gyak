<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feladat;

class FeladatController extends Controller
{
    public function index(){
      
        return Feladat::all();
    }

    public function show($id){
        $feladat = response()->json(Feladat::find($id));
        return $feladat;
    }

    public function store(Request $request){
        $feladat = new Feladat();
        $feladat->leírás = $request->leírás;
        $feladat->kezdete = $request->kezdete;
        $feladat->vége = $request->vége;
        $feladat->user_id = $request->user_id;
        $feladat->save();
    }

    public function update(Request $request, $id){
        $feladat = Feladat::find($id);
        $feladat->leírás = $request->leírás;
        $feladat->kezdete = $request->kezdete;
        $feladat->vége = $request->vége;
        $feladat->save();
    }

    public function destroy($id){
        Feladat::find($id)->delete();
    }
}
