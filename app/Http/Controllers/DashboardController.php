<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Dog;
use App\Ajuda;
use App\Adocao;

class DashboardController extends Controller
{
    public function listar(){

        $dog = new Dog();
        $adocao = new Adocao();
        $ajuda = new Ajuda();

        $dog = DB::table('dog')
                ->where('ativo', '=', '0')
                ->orderBy('iddog', 'desc')
                ->get();

        $adocao = DB::table('adocao')
                    ->join('dog', 'adocao.iddog', '=', 'dog.iddog')
                    ->whereRaw('adocao.ativo = 1')
                    ->orderBy('idadocao', 'desc')
                    ->get();

        $dog2 = DB::table('dog')
                    ->where('ativo', '<>', '4')
                    ->get();

        $ajuda = DB::table('ajuda')
                    ->where('ativo', '<>', '0')
                    ->get();

        return view('pages.dashboard', ['dog' => $dog, 'adocao' => $adocao, 'dog2' => $dog2, 'ajuda' => $ajuda]);


    }
}
