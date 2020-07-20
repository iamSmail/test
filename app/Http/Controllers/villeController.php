<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;
class villeController extends Controller
{
    public function getVilles_f(){
        $villes = Ville::all();
        return view('mapage')->with('villes',$villes);
    }
    public function ajouter_f(request $request){
        $nameVille = $request->nvVille;
        $ville=new Ville;
        $ville->name=$nameVille;
        $ville->save();
        return redirect()->route('getVilles');
    }
    public function supprimer_f(request $request){
        $id=$request->id;
        $res = Ville::whereid($id)->first();
        $res->delete();
        return redirect()->route('getVilles');

    }
        public function modifier_f(request $request){
            $id=$request->id;
            $villes = Ville::where('id','=',$id)->first();
            return view('modifier')->with('villes',$villes);

    }
    public function modifier_sub(request $request){

    $name=$request->nvVille;
    $id=$request->id;
    $row=ville::find($id);
    $row->name=$name;
    $row->save();
    //dd($row);
    return redirect()->route('getVilles');
    

}
    
}
