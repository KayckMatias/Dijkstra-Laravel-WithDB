<?php

namespace App\Http\Controllers;

use App\Models\Vertice;
use Illuminate\Http\Request;

class VerticeController
{
    public function index()
    {
      $vertice = Vertice::all();
      return view('vertice.index')->with('vertice', $vertice);
    }

    
    public function create()
    {
        return view('vertice.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Vertice::create($input);
        return redirect('vertice')->with('flash_message', 'Vértice Adicionada');  
    }

    
    public function show($id)
    {
        $vertice = Vertice::find($id);
        return view('vertice.show')->with('vertice', $vertice);
    }

    
    public function edit($id)
    {
        $vertice = Vertice::find($id);
        return view('vertice.edit')->with('vertice', $vertice);
    }

  
    public function update(Request $request, $id)
    {
        $vertice = Vertice::find($id);
        $input = $request->all();
        $vertice->update($input);
        return redirect('vertice')->with('flash_message', 'Vértice Atualizada!');  
    }

   
    public function destroy($id)
    {
        Vertice::destroy($id);
        return redirect('vertice')->with('flash_message', 'Vértice Deletada!');  
    }
}
