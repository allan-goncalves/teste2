<?php

namespace App\Http\Controllers;
use App\Models\Calculo;
use Illuminate\Http\Request;
namespace App\Http\Controllers;

class HomeController extends Controller
{
    
    public function index(){ 
        return view('app');
       
    }
    public function historico(){
        
        $lista = Calculo::all(); 
        dd($lista,'entrou');
        return   json_encode($lista);
    }
    public function storeCalcular(Request $request){
         die($request);
      /*   $calculo             = new Calculo();
        $calculo->moeda1     =$request->moeda1;
        $calculo->moeda2     =$request->moeda2;
        $calculo->nome1      =$request->nome1; 
        $calculo->nome2      =$request->nome2;
        $calculo->quantidade = $request->quantidade;
        $calculo->resultado  =$request->resultado;
        $calculo->data       = '2020-10-20';
        $calculo->user       = 1;   */
       // die($calculo);
       // $calculo->save();
        //return redirect()->route('users.listAllUsers');
       // return view('app');
    }
}
