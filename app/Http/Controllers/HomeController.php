<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Foundation\Auth\User;
use App\User;
use App\Address;
use App\Cliente;
use App\Endereco;
use App\Models\Dashboard;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function page(){

        $users = Cliente::with('endereco')->get();
        //$address = Address::with('User')->first();
        $e = Endereco::first();

        //$u = DB::table('addresses')->first();

        //$address = App\Users::find()->address;

        //dd($address);
        //dump($users);


        return view('page', ['teste' => ['nome' => 'FrontEnd', "subtitulo" => "I'm a web developer"], 'usuarios' => $users]);
    }

    public function oneOne()
    {
        
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function upload()
    {
        return view('upload');
    }


    public function dashboard()
    {
        $userId = \Auth::user()->id;
        $dash = User::with('dashboard')->find($userId)->toArray();
        //dd($dash);
        $users = Cliente::with('endereco')->get();
        $cards = [
            2 => [
                'titulo' => 'INVENTORY',
                'valor' => '5,200',
                'info' => '50% Increase in 30 Days',
                'icon' => 'fa fa-tags fa-2x',
                'bg_color' => 'info'
            ],
            1 => [
                'titulo' => 'DOWNLOADS',
                'valor' => '92,050',
                'info' => '20% Increase in 30 Days',
                'icon' => 'fa fa-download fa-2x',
                'bg_color' => 'success'
            ],
            3 => [
                'titulo' => 'MENTIONS',
                'valor' => '5,200',
                'info' => '50% Increase in 30 Days',
                'icon' => 'fa fa-quote-right fa-2x',
                'bg_color' => 'danger'
            ],
            4 => [
                'titulo' => 'DIRECT MESSAGES',
                'valor' => '92,050',
                'info' => '20% Increase in 30 Days',
                'icon' => 'fa fa-comments fa-2x',
                'bg_color' => 'secondary'
            ],
            
        ];

        $proibidos = [];
        $proibidos = collect(Dashboard::where('user_id', 1)->where('status', 1)->select(['modulo_id'])->get()->pluck('modulo_id'))->toArray();
        //dd($proibidos);

        foreach ($proibidos as $key => $value) {
            
            $cards = array_filter($cards, function($k) use ($value){
                return $k != $value;
            }, ARRAY_FILTER_USE_KEY);
        }

        return view('dashboard', ['cards' => $cards , 'teste' => ['nome' => 'FrontEnd', "subtitulo" => "I'm a web developer"], 'usuarios' => $users, 'id' => $userId]);
    }

    public function check($userId, $modulo){
        //dd($userId. ' '. $modulo);
        // $teste = $modulo = Dashboard::where('user_id', $userId)->where('status', 0)->where('modulo_id', $modulo)->get();
        // dd($teste);
        $where = ['user_id'=> $userId, 'modulo_id'=> $modulo, 'status' => 0];
        $update = ['status'=> 1];
        $modulo = Dashboard::updateOrCreate($where, $update);
               
        return $modulo;
    }

    public function modulo()
    {
        return view('modulo');
    }

}
