<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        return Cadastro::create($data);
    }

    public function get()
    {
        return Cadastro::all();
    }
}
