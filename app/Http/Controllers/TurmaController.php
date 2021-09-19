<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Professor;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $professores = Professor::all();
        $turmas = Turma::all();
        return view('admin.turma.index',compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $professores = Professor::all();
        $turmas = Turma::all();
        return view('admin.turma.create', compact('professores'));
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

        $turma = new Turma();
        $turma -> horario=$request -> horario;
        $turma -> ano=$request -> ano;

        $turma -> professor_id = $request -> professor_id;

        $turma->save();
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
        $turma = Turma::where('id',$id)->with('professor')->first();
        $professores = Professor::all();
        return view('admin.turma.edit', compact('professores','turma'));
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
        $turma = Turma::where('id',$id)->first();
        $turma -> horario=$request -> horario;
        $turma -> ano=$request -> ano;

        $turma -> professor_id = $request -> professor_id;

        $turma->update();
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
        $turma = Turma::where('id',$id)->first();

        $turma -> delete();
        return back();
    }
}
