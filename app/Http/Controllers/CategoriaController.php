<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('simples')) {

            return Categoria::select('id', 'nome')->orderBy('nome')->get();
        }

        return Categoria::withCount('noticias')->get();
    }


    public function noticias($id)
    {
        return Categoria::with('noticias')->findOrFail($id);
    }
}
