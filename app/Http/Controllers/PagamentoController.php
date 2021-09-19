<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\User;
use App\Pagamento;

class PagamentoController extends Controller
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
        $users = User::all();
        $pagamentos = Pagamento::all();
        return view('admin.pagamento.index', compact('pagamentos'));
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
        $users = User::all();
        $pagamentos = Pagamento::all();
        return view('admin.pagamento.create', compact('alunos', 'users'));
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
        $pagamento = new Pagamento();
        $pagamento -> valor_pago=$request -> valor_pago;
        $pagamento -> aluno_id = $request -> aluno_id;
        $pagamento -> user_id = auth()->id();
        $pagamento -> tipo_pagamento=$request -> tipo_pagamento;

        $pagamento ->save();
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
        $pagamento = Pagamento::where('id',$id)->with('aluno','user')->first();
        $alunos = Aluno::all();
        $users = User::all();
        return view('admin.pagamento.edit', compact('alunos', 'users','pagamento'));
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
        $pagamento = Pagamento::where('id',$id)->first();
        $pagamento -> valor_pago=$request -> valor_pago;
        $pagamento -> aluno_id = $request -> aluno_id;
        $pagamento -> user_id = $request -> user_id;
        $pagamento -> tipo_pagamento=$request -> tipo_pagamento;

        $pagamento ->update();
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
        $pagamento = Pagamento::where('id',$id)->first();

        $pagamento -> delete();
        return back();
    }
}
