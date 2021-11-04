<?php

namespace App\Http\Controllers;

use App\Models\Universidade;
use Illuminate\Http\Request;

class UniversidadeController extends Controller
{
    public function index()
    {
        $universidades = Universidade::all();

        return view('universidade.index',[
            'universidades' => $universidades
        ] );
    }

    public function show(Universidade $universidade)
    {

        return view('universidade.show',[
            'universidades' => $universidade
        ] );
    }

    public function create()
    {
        return view('universidade.create');
    }

    public function store(Request $request)
    {
        $sanitized = [
            'nomeuni' => $request->nomeuni,
            'sigla' => $request->sigla,
        ];

        if (empty($sanitized['nomeuni']) || empty($sanitized['sigla'])) {
            abort(400, "O formulário contem campos inválidos");
        }

        $universidade = Universidade::create($sanitized);

        return response([
            'message' => 'Operação efetuada com sucesso!',
            'universidade' => $universidade,
            'redirect' => url('universidade'),
        ]);
    }

    public function edit($universidadeId)
    {
        return view('universidade.edit',[
            'universidade' => Universidade::where('id', $universidadeId)->get()->first(),
        ]);

    }

    public function update(Request $request, $universidadeId)
    {
        $sanitized = [
            'nomeuni' => $request->nomeuni,
            'sigla' => $request->sigla,
        ];

        if (empty($sanitized['nomeuni']) || empty($sanitized['sigla'])) {
            abort(400, "O formulário contem campos inválidos");
        }

        Universidade::where('id', $universidadeId)->update($sanitized);

        return response([
            'message' => 'Operação efetuada com sucesso!',
            'redirect' => url('universidade'),
        ]);
    }
}
