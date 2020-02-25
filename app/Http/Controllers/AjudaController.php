<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ajuda;

class AjudaController extends Controller
{
    public function index(){
        return view('pages.ajude-nos');
    }

    public function cadastrarAjuda(){

        $messages = [
            'required' => 'O campo :attribute é obrigatório',
            'max'      => 'O :attribute deve ter no máximo :max caracteres',
        ];

        $this->validate(request(), [
            'nome' => 'required|max:50',
            'email' => 'required|max:50',
            'assunto' => 'required|max:25',
            'mensagem' => 'required|max:250',
        ], $messages);

        $ajuda = new Ajuda();

        $ajuda->nome = request('nome');
        $ajuda->email = request('email');
        $ajuda->assunto = request('assunto');
        $ajuda->mensagem = request('mensagem');
        $ajuda->save();

        return back()->with('success','Salvo! Obrigado por contribuir com o site.');
    }

    public function excluir($id){
        DB::table('ajuda')
            ->where('idajuda', $id)
            ->update(['ativo' => 0]);

        return redirect()->to('/dashboard'); 
    }
}
