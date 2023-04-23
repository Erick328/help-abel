<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=Articulo::all();
        $articulos->load('Categorias');
        //dd($articulos);
        return View('articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        return View('articulos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo=new Articulo();
        $articulo->nombre=$request->nombre;
        $articulo->precio=$request->precio;
        $articulo->stock=$request->stock;
        $articulo->idCategoria=$request->idCategoria;
        $articulo->save();
        //Articulo::create($request->all());
        return redirect()->route('articulos.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo=Articulo::find($id);
        $categorias=Categoria::all();
        return View('articulos.edit', compact('categorias','articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo=Articulo::find($id);
        $articulo->nombre=$request->nombre;
        $articulo->precio=$request->precio;
        $articulo->stock=$request->stock;
        $articulo->idCategoria=$request->idCategoria;
        $articulo->update();
        return redirect()->route('articulos.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articulo::find($id)->delete();
        return redirect()->route('articulos.index');
    }
}
