<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $requisicao = Http::get('https://random-data-api.com/api/v2/users?size=100');
        $dados = $requisicao->json();
    
        return view('index', compact('dados'));
    }

}
