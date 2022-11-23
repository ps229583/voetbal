<?php

namespace App\Http\Controllers;

use App\Models\voetbal;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class voetballersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voetbals = voetbal::all(['spelerID', 'naam', 'nationaliteit', 'marketwaarde', 'sterkebeen', 'created_at', 'updated_at']);
        return view('spelers.index', ['voetbals' => $voetbals]);
    
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spelers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $request->validate([
        'naam' => ['required', 'max:20'],
        'nationaliteit' => ['required', 'max:234'],
        'marketwaarde' => ['required', 'max:234'],
        'sterkebeen' => ['required', 'max:234'],
    ]);

    voetbal::create($request->only(['name', 'description']));

    return redirect()->route('spelers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\voetbal  $speler
     * @return \Illuminate\Http\Response
     */
    public function show(voetbal $speler)
    {
        return view('spelers.details', ['voetbal' => $speler]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\voetbal  $voetbals
     * @return \Illuminate\Http\Response
     */
    public function edit(voetbal $voetbals)
    {
        return view('spelers.edit', ['voetbal' => $voetbals]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\voetbal  $voetbals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, voetbal $voetbals)
    {
        $request->validate([
            'naam' => ['required', Rule::unique('spelers')->ignore($voetbals), 'max:20'],
            'nationaliteit' => ['required', 'max:234'],
            'marketwaarde' => ['required', 'max:234'],
            'sterkebeen' => ['required', 'max:234'],
        ]);
    
        $voetbals->update($request->only(['naam', 'nationaliteit', 'marketwaarde', 'sterkebeen']));
    
        return redirect()->route('spelers.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\voetbal  $voetbals
     * @return \Illuminate\Http\Response
     */
    public function destroy(voetbal $voetbals)
    {
        $voetbals->delete();
        return redirect()->route('spelers.index');
    
    }

    public function delete(voetbal $voetbals){
        return view('demonstraties.delete', ['voetbal' => $voetbals]);
    }
    
}
