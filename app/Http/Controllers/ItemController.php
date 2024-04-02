<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items = items::all();
        return view('items.index', compact('items'));
    }
    
    public function create(){
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Items::create($request->all());
        
        return redirect()->route('items.index')
            ->with('success', 'Item created successfully.');
    }

    public function show(Items $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Items $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Items $Items)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $Items->update($request->all());
        
        return redirect()->route('items.index')
            ->with('success', 'Item updated successfully');
    }

    public function destroy(Items $item)
    {
        $item->delete();
        
        return redirect()->route('items.index')
            ->with('success', 'Item deleted successfully');
    }

}
