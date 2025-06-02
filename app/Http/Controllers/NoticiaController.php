<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
           return Noticia::orderBy('created_at', 'desc')->paginate(5);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'imagem' => 'nullable|url',
        ]);

        $noticia = Noticia::create($validated);

        return response()->json([
            'message' => 'Notícia criada com sucesso!',
            'data' => $noticia
        ], 201);
    }



    public function show($id)
    {
        $noticia = Noticia::find($id);

        if (!$noticia) {
            return response()->json(['message' => 'Notícia não encontrada'], 404);
        }

        return response()->json($noticia);
    }

    public function destaques()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->take(3)->get();
        return response()->json($noticias);
    }


    public function update(Request $request, Noticia $noticia)
    {
        $noticia->update($request->all());
        return $noticia;
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return response()->noContent();
    }
}
