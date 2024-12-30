<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;
use Inertia\Inertia;
use App\Http\Resources\ToolsResource;

class ToolsController extends Controller
{
    public function index()
    {
        return Inertia::render('Tools/Index', [
            'tools' => ToolsResource::collection(Tool::all())
        ]);
    }

    public function show(string $id)
    {
        return Inertia::render('Tools/Show', [
            'tool' => new ToolsResource(Tool::with('items')->findOrFail($id))
        ]);
    }

    
}
