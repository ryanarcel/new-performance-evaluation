<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluee;
use Inertia\Inertia;
use App\Http\Resources\EvalueeResource;

class AdministratorEvalueeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $evaluees = Evaluee::query();

        $evaluees->where('rank', 'Administrator');

        return Inertia::render('Evaluees/Administrator', [
            'evaluees' =>  EvalueeResource::collection($evaluees->paginate(5))
        ]);

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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
