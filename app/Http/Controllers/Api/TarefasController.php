<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTarefasRequest;
use App\Http\Requests\UpdateTarefasRequest;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function index()
    {
        return Tarefa::all();
    }

    public function store(StoreTarefasRequest $request)
    {
//        dd($request->all());
        return response()->json(Tarefa::create($request->all()), 201);
    }

    public function show(Int $tarefa)
    {
        return Tarefa::find($tarefa);
    }

    public function update(UpdateTarefasRequest $request, Tarefa $tarefa)
    {
        $tarefa->fill($request->all());
        $tarefa->save();
        return $tarefa;
    }

    public function destroy(int $tarefa)
    {
        Tarefa::destroy($tarefa);
        return response()->noContent();
    }
}
