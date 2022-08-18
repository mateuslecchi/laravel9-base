<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Ferramenta;
use App\Models\Funcionario;
use App\Models\Parada;

class DashboardController extends Controller
{
    public function index()
    {
       return view('dashboard');
    }
}
