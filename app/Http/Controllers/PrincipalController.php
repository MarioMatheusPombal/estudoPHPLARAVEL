<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function principal()
    {
        $motivo_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];
        return view('site.principal', ['titulo' => 'Principal', 'motivo_contato' => $motivo_contato]);
    }
}
