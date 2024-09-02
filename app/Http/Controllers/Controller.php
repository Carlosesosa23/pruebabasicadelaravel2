<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all(); 
        return view('items.index', compact('items')); 
    }

    /**     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Item::create([
            'name' => $request->name,
        ]);

        return redirect()->route('items.index');
    }
}
