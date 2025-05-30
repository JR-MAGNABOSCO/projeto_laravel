<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PublicController extends Controller
{
    public function home()
    {
        return response()->json([
            'mensagem' => 'Bem-vindo ao Portal de Notícias!',
            'destaques' => [
                'noticias' => 10,
                'usuarios' => 5,
            ]
        ]);
    }

    public function sobre()
    {
        return response()->json([
            'titulo' => 'Sobre o Portal',
            'conteudo' => 'Este é um sistema de gerenciamento de notícias criado com Laravel e Vue.js.'
        ]);
    }

    public function contato(Request $request)
    {
            $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string',
            'mensagem' => 'required|string'
        ]);

        $contato = Contato::create($validated);

        return response()->json([
            'message' => 'Mensagem enviada com sucesso!',
            'data' => $contato
        ], 201);
    }
}
