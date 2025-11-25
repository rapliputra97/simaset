<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanah; // ⬅️ penting! import model

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // daftar tanah
        $tanahs = Tanah::all();
        return view('tanah.index', compact('tanahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tanah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tanah::create($request->all());
        return redirect()->route('tanah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ⬅️ LANGKAH 5 (Menampilkan relasi)
        $tanah = Tanah::with('bangunans')->findOrFail($id);

        return view('tanah.show', compact('tanah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tanah = Tanah::findOrFail($id);
        return view('tanah.edit', compact('tanah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tanah = Tanah::findOrFail($id);
        $tanah->update($request->all());

        return redirect()->route('tanah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tanah = Tanah::findOrFail($id);
        $tanah->delete();

        return redirect()->route('tanah.index');
    }
}
