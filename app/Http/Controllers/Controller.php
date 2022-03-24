<?php

namespace App\Http\Controllers;

use App\Models\Aresta;
use App\Models\Node;
use App\Models\PathFindingService;
use App\Models\Vertice;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Request $request)
    {
      $aresta = Aresta::all();
      $vertice = Vertice::all();
      $service = new PathFindingService();
      
      foreach ($vertice as $item) {
        $node = new Node($item->name);
        $service->addNode($node);
      }
      foreach ($aresta as $item) {
        $nodeOrigin = $service->getNode($item->origin);
        $nodeDest = $service->getNode($item->dest);
        $nodeWeight = $item->weight;
        $nodeOrigin->connectTo($nodeDest, $nodeWeight);
    }

      if($request->input('start') && $request->input('end')){

        $start = $request->input('start');
        $end = $request->input('end');
        if ($start != null) {
            $service->getNode($start)->makePrimary();
        }
        if ($end != null) {
            $service->getNode($end)->setIsLast();
        }
        if ($start != null || $end != null) {
            $service->findShortestPathDijkstraToNode($service->getNode($start), $service->getNode($end));
            $service->printPath($service->getNode($start), $service->getNode($end));
        }
        
        return view('dijkstra.index')->with('service', $service);
      }else{
        return view('dijkstra.form');
      }
      
    }
}
