<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::with('noticias')->get(); // ou with('noticias')
    }

    public function noticias($id)
    {
        return Categoria::with('noticias')->findOrFail($id);
    }
}
