<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Location;
use Validator;
use App\Http\Requests\StoreState;

class LocalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        // $p = Country::find(1); 
        // dump($p->name);       
        // $l = $p->locais; 
        // dump('Latitude: '.$l->latitude);  
        // dump('Latitude: '.$l->longitude);  

        // $l->toArray();
        

        $pais = Country::with('locais')->get();
        $p = $pais->toArray();
        // dump($p);

        $lat = 234;
        $long = 432;

        // $l = Location::where('latitude', $lat)->where('longitude', $long)->get()->first();
        // $pa = $l->pais;
        //dd($p);

        $latit = Location::with('pais')->where('latitude', $lat)->where('longitude', $long)->get();
        $latit->toArray();


        return view('local', ['dados' => $p, 'latitude' => $latit]);
    }

    public function store(Request $resquest)
    {
        // echo "Chegou aqui";
        $data = $resquest->all();
        

        $p = Country::create($data);
        $p->locais()->create($data);
        
        return redirect()->route('local')->with('success', 'País cadastrado com sucesso');

    }

    public function states()
    {
        $dados = State::get()->where('countries_id', 2)->toArray();
        $pais = Country::get()->toArray();
        //dd($pais);
        
        return view('states', ['dados' => $dados, 'pais' => $pais]);
    }

    public function storeState(StoreState $request)
    {
        $dados = $request->all();
        $dados['initials'] = 0;
        $c = State::create($dados);
        return redirect()->route('states')->with('success', $c['name'].' cadastrado com sucesso');
    }


}
