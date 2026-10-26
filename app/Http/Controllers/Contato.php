<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoModel;

class Contato extends Controller
{
    public function contato(Request $request) {
        $motivo_contatos = MotivoModel::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {

        $request->validate(
            [
                'nome' => 'required|min:3|max:40|unique:site_contatos,nome',
                'telefone' => 'required',
                'email' => 'required|email',
                'motivo_contatos_id' => 'required|exists:motivo_models,id',
                'mensagem' => 'required|max:200'
            ], 
            [
                'nome.required' => 'O campo nome é obrigatório',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'nome.unique' => 'O campo nome já existe',
                'telefone.required' => 'O campo telefone é obrigatório',
                'email.required' => 'O campo e-mail é obrigatório',
                'email.email' => 'O campo e-mail deve ser um endereço válido',
                'motivo_contatos_id.required' => 'O campo motivo do contato é obrigatório',
                'motivo_contatos_id.exists' => 'O campo motivo do contato deve ser um motivo válido',
                'mensagem.required' => 'O campo mensagem é obrigatório',
                'mensagem.max' => 'O campo mensagem deve ter no máximo 200 caracteres'
            ]
        );

        SiteContato::create($request->all());

        return redirect()->route('site.principal');
    }


}
