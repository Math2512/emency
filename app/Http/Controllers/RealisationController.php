<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realisations = Realisation::all();
        return view('realisation.index', ['realisations' => $realisations]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $realisation = Realisation::where('slug', $slug)->firstOrFail();

        return view('realisation.show', ['realisation' => $realisation]);
    }
}
