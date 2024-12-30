<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToolItem;
use App\Http\Resources\ToolItemResource;
use Inertia\Inertia;

class ToolItemController extends Controller
{
    public function index ()
    {

    }
    public function show (string $id)
    {
        return Inertia::render('Tools/Item', [
            'tools' => ToolItemResource::collection(ToolItem::findOrfail($id))
        
        ]);
    }
    public function store (Request $request)
    {
        $validations = $request->validate([
            'statement' => 'required',
            'tool_id' => 'required|exists:tools,id',
        ]);

        ToolItem::create($validations);

        return to_route('tools.show', $request->tool_id);
    }
    public function update (Request $request, string $id)
    {
        $validations = $request->validate([
            'statement' => 'required',
        ]);

        $item = ToolItem::findOrFail($id);
        $item->update($validations);

        return to_route('tools.show', $request->tool_id);
    }

    public function destroy (string $id)
    {
        $item = ToolItem::findOrFail($id);
        $item->delete();

        return to_route('tools.show', $id);
    }

}
