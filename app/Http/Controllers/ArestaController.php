<?php

namespace App\Http\Controllers;

use App\Models\Aresta;
use Illuminate\Http\Request;

class ArestaController
{
    public function index()
    {
      $aresta = Aresta::all();
      return view('aresta.index')->with('aresta', $aresta);
    }

    
    public function create()
    {
        return view('aresta.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Aresta::create($input);
        return redirect('aresta')->with('flash_message', 'Aresta Adicionada');  
    }

    
    public function show($id)
    {
        $aresta = Aresta::find($id);
        return view('aresta.show')->with('aresta', $aresta);
    }

    
    public function edit($id)
    {
        $aresta = Aresta::find($id);
        return view('aresta.edit')->with('aresta', $aresta);
    }

  
    public function update(Request $request, $id)
    {
        $aresta = Aresta::find($id);
        $input = $request->all();
        $aresta->update($input);
        return redirect('aresta')->with('flash_message', 'Aresta Atualizada!');  
    }

   
    public function destroy($id)
    {
        Aresta::destroy($id);
        return redirect('aresta')->with('flash_message', 'Aresta Deletada!');  
    }
}
