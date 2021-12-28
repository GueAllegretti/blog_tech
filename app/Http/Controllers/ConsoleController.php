<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consoles = Console::all();

        return view('console.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('console.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $console = Console::create([
            'name' => $request->name,
            'brand' => $request->brand,
        ]);

        return redirect(route('console.index'))->with('message', 'Hai inserito correttamente una console');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function show(Console $console)
    {
        return view('console.show', compact('console'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function edit(Console $console)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function destroy(Console $console)
    {
        //
    }
}
