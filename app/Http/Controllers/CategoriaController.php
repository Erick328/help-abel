<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//get(obtener)post(insertar)put(actualizar)delete(eliminar)
    {
        $categorias=Categoria::all();
        return View('categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria=new Categoria();
        $categoria->nombre=$request->nombre;
        $categoria->save();
        return redirect()->route('categorias.index');
        //Categoria::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=Categoria::find($id);
        return View('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria=Categoria::find($id);
        //$categoria=DB::table('categorias')->where('categoria.id','=',$id);
        $categoria->nombre=$request->nombre;
        $categoria->update();
        return redirect()->route('categorias.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::find($id)->delete();
        return redirect()->route('categorias.index');
    }
}
