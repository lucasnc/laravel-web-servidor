<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dog;
use Intervention\Image\ImageServiceProvider;
use Intervention\Image\Facades\Image;
use Illuminate\Pagination\Paginator;
use lluminate\Support\Collection;

class DogController extends Controller
{
    public function listar(){
        $dogs = DB::table('dog')
                ->where('ativo', '=', '1')
                ->orderBy('iddog', 'desc')
                ->paginate(6);
        return view('pages.dogs', ['dogs' => $dogs]);

    }

    public function cadastrarDog(){

        $messages = [
            'required' => 'O campo :attribute é obrigatório',
            'image'    => 'Apenas Imagens são suportadas',
            'mimes' => 'Formatos suportados para Imagem são jpeg, png, jpg',
            'max'      => 'O :attribute excedeu o tamanho máximo (:max)',
        ];

        $this->validate(request(), [
            'nome' => 'required|max:25',
            'descricao' => 'required|max:250',
            'tamanho' => 'required|max:25',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], $messages);

        $dog = new Dog();

        $dog->nome = request('nome');
        $dog->descricao = request('descricao');
        $dog->tamanho = request('tamanho');
        $dog->ativo = 0;
        $image = request('image');
        if(!is_null($image)){
            $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save( public_path('/images/' . $filename ) );
        $dog->image= $filename;
        }
        
        $dog->save();
        
        return back()->with('success','Salvo! Seu cadastro foi enviado para análise.');
    }

    public function aceitarDog($id){
        DB::table('dog')
            ->where('iddog', $id)
            ->update(['ativo' => 1]);

        return redirect()->to('/dashboard'); 
    }

    public function recusarDog($id){
        DB::table('dog')
            ->where('iddog', $id)
            ->update(['ativo' => 4]);

        return redirect()->to('/dashboard'); 
    }

    public function excluir($id){
        DB::table('dog')
            ->where('iddog', $id)
            ->update(['ativo' => 4]);

        return redirect()->to('/dashboard'); 
    }
    public function mostrarForm(){
        return view('pages.cadastrar-dog');
    }
}
