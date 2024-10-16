<?php

namespace App\Http\Controllers;

use App\Models\Gunung;
use Illuminate\Http\Request;

class GunungController extends Controller
{
    public function index()
    {
        $gunungs = Gunung::with('statuses')->get();
        return view('gunungs.index', compact('gunungs'));
    }

    public function create()
    {
        return view('gunungs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gunung' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'status_buka' => 'required|boolean',
            'link_booking' => 'nullable|url',
        ]);

        Gunung::create($request->all());

        return redirect()->route('gunungs.index')->with('success', 'Gunung berhasil ditambahkan.');
    }

    public function show($id)
    {
        $gunung = Gunung::with('statuses')->findOrFail($id);
        return view('gunungs.show', compact('gunung'));
    }

    public function edit($id)
    {
        $gunung = Gunung::findOrFail($id);
        return view('gunungs.edit', compact('gunung'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gunung' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'status_buka' => 'required|boolean',
            'link_booking' => 'nullable|url',
        ]);

        $gunung = Gunung::findOrFail($id);
        $gunung->update($request->all());

        return redirect()->route('gunungs.index')->with('success', 'Gunung berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gunung = Gunung::findOrFail($id);
        $gunung->delete();

        return redirect()->route('gunungs.index')->with('success', 'Gunung berhasil dihapus.');
    }
}
