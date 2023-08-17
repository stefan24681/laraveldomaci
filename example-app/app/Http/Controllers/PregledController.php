<?php

namespace App\Http\Controllers;

use App\Http\Resources\PregledResource;
use App\Models\Pregled;
use Illuminate\Http\Request;

class PregledController extends Controller
{

    //moji kontroleri
    public function getAllPregleds()
    {
        $pregleds = Pregled::all();

        return PregledResource::collection($pregleds);
    }

    public function addPregled()
    {
        request()->validate([
            'lekar_id' => 'required',
            'pacijent_id' => 'required',
            'Anamneza' => 'required',
            'Terapija' => 'required'
        ]);
        return Pregled::create([
            'lekar_id' => intval(request('lekar_id')),
            'pacijent_id' => intval(request('pacijent_id')),
            'Anamneza' => request('Anamneza'),
            'Terapija' => request('Terapija'),
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pregled $pregled)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pregled $pregled)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pregled $pregled)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pregled $pregled)
    {
        //
    }
}