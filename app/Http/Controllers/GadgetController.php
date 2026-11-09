<?php

namespace App\Http\Controllers;

use App\Models\Gadget;
use Illuminate\Http\Request;

class GadgetController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $gadgets = Gadget::all();
        return view('gadgets.index', compact('gadgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gadgets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $gadget = new Gadget();
        $gadget->name = request('name');
        $gadget->brand = request('brand');
        $gadget->category = request('category');
        $gadget->price = request('price');
        $gadget->stock = request('stock');
        $gadget->save();
        return redirect()->route('gadgets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gadget = Gadget::findOrFail($id);
        return view('gadgets.show', compact('gadget'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gadget = Gadget::findOrFail($id);
        return view('gadgets.edit', compact('gadget'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $gadget = Gadget::findOrFail($id);
        $gadget->name = request('name');
        $gadget->brand = request('brand');
        $gadget->category = request('category');
        $gadget->price = request('price');
        $gadget->stock = request('stock');
        $gadget->save();
        return redirect()->route('gadgets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gadget = Gadget::findOrFail($id);
        $gadget->delete();
        return redirect()->route('gadgets.index');
    }
}
