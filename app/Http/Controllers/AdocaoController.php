<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Adocao;

class AdocaoController extends Controller
{
    public function mostrarForm($id){
        $dog = DB::table('dog')
                ->where('iddog', '=', $id)
                ->get();
        return view('pages.adotar', ['dog' => $dog]);
    }

    public function adotar(){

        $messages = [
            'required' => 'O campo :attribute é obrigatório',
            'max'      => 'O :attribute deve ter no máximo :max caracteres',
        ];

        $this->validate(request(), [
            'nome' => 'required|max:50',
            'email' => 'required|max:50',
            'pergunta' => 'required|max:25',
        ], $messages);

        $adocao = new Adocao();

        $adocao->nomePessoa = request('nome');
        $adocao->email = request('email');
        $adocao->pergunta = request('pergunta');
        $adocao->iddog = request('iddog');
        $adocao->ativo = 1;
        $adocao->save();

        return back()->with('success','Salvo! Sua solicitação foi enviada para análise.');
    }

    public function aceitarAdocao($id){

        

        $dog = DB::table('adocao')
                ->select('iddog')
                ->where('idadocao', '=', $id)
                ->get();

        DB::beginTransaction();

        DB::table('adocao')
            ->where('idadocao', $id)
            ->update(['ativo' => 0]);

        DB::table('dog')
            ->where('iddog', '=', $dog[0]->iddog)
            ->update(['ativo' => 3]);

        DB::commit();

        return redirect()->to('/dashboard'); 
    }

    public function recusarAdocao($id){
        DB::table('adocao')
            ->where('idadocao', $id)
            ->update(['ativo' => 4]);

        return redirect()->to('/dashboard'); 
    }
}
