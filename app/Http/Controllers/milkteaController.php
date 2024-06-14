<?php

namespace App\Http\Controllers;


use App\Models\milkteaModel;
use Illuminate\Http\Request;

class milkteaController extends Controller
{
    public function index()
    {
        $milktea = milkteaModel::all();
        
        return response()->json(['milktea' => $milktea, 'message' => "Milktea inserted", 'status'=> 200], 200);
    }

    public function insert(Request $request){

        $validate = $request->validate([
            'milktea' => 'required|string|max:255',
            'size' => 'required|in: medio, grande',
            'price' => 'required|in: 49, 59',
            'pearl' => 'required|in:nopearl, w/pearl',
        ]);

        $insert = milkteaModel::create([
            'milktea' => $validate['milktea'],
            'size' => $validate['size'],
            'price' => $validate['price'],
            'pearl' => $validate['pearl'],
        ]);


        return response()->json(['message' => "data inserted", 'status' => 200],200);
    }
}
