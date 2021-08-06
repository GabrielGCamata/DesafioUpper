<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidade = Cidade::all();

        return response()->json(['data' => $cidade], 200);
    }
}
