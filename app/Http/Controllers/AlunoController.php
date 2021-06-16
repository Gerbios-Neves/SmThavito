<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Carta;
use App\Turma;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $alunos = Aluno::all();
        $cartas = Carta::all();
        $turmas = Turma::all();
        return view('admin.aluno.index', compact('alunos'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        //
        $alunos = Aluno::all();
        $cartas = Carta::all();
        $turmas = Turma::all();
        return view('admin.aluno.create', compact('turmas', 'cartas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $aluno = new Aluno();
        $aluno -> numero_processo=$request -> numero_processo;
        $aluno -> nome=$request -> nome;
        $aluno -> nome_pai=$request -> nome_pai;
        $aluno -> nome_mae=$request -> nome_mae;
        $aluno -> estado_civil=$request -> estado_civil;
        $aluno -> naturalidade=$request -> naturalidade;
        $aluno -> data_nascimento=$request -> data_nascimento;
        $aluno -> bilhete=$request -> bilhete;
        $aluno -> local_emissao=$request -> local_emissao;
        $aluno -> contacto=$request -> contacto;
        $aluno -> tipo_pagamento=$request -> tipo_pagamento;

        $aluno -> carta_id = $request -> carta_id;
        $aluno -> turma_id = $request -> turma_id;

        $aluno ->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $aluno = Aluno::where('id',$id)->with('carta','turma')->first();
        return view('admin.aluno.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aluno = Aluno::where('id',$id)->with('carta','turma')->first();
        $cartas = Carta::all();
        $turmas = Turma::all();
        return view('admin.aluno.edit', compact('turmas', 'cartas','aluno'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $aluno = Aluno::where('id',$id)->first();
        $aluno -> numero_processo=$request -> numero_processo;
        $aluno -> nome=$request -> nome;
        $aluno -> nome_pai=$request -> nome_pai;
        $aluno -> nome_mae=$request -> nome_mae;
        $aluno -> estado_civil=$request -> estado_civil;
        $aluno -> naturalidade=$request -> naturalidade;
        $aluno -> data_nascimento=$request -> data_nascimento;
        $aluno -> bilhete=$request -> bilhete;
        $aluno -> local_emissao=$request -> local_emissao;
        $aluno -> contacto=$request -> contacto;
        $aluno -> tipo_pagamento=$request -> tipo_pagamento;

        $aluno -> carta_id = $request -> carta_id;
        $aluno -> turma_id = $request -> turma_id;

        $aluno ->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
