<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;


class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return response()->json(['data'=> $estados], 200);
    }
}
