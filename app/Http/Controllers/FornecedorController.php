<?php

namespace App\Http\Controllers;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '12345678901234', 'ddd' => '11', 'telefone' => '123456789'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => '12345678901234', 'ddd' => '11', 'telefone' => '123456789'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'N', 'cnpj' => '12345678901234', 'ddd' => '11', 'telefone' => '123456789'],
            3 => ['nome' => 'Fornecedor 4', 'status' => 'S', 'cnpj' => '12345678901234', 'ddd' => '21', 'telefone' => '123456789'],
            4 => ['nome' => 'Fornecedor 5', 'status' => 'N'],
            5 => ['nome' => 'Fornecedor 6', 'status' => 'S', 'cnpj' => '12345678901234', 'ddd' => '31', 'telefone' => '123456789'],
            6 => ['nome' => 'Fornecedor 7', 'status' => 'N'],
            7 => ['nome' => 'Fornecedor 8', 'status' => 'S'],
            8 => ['nome' => 'Fornecedor 9', 'status' => 'N'],
            9 => ['nome' => 'Fornecedor 10', 'status' => 'S'],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
