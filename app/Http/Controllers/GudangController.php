<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudang = Gudang::orderBy('location', 'ASC')->get();
        return view('pages.gudang.index', compact('gudang'));
    }

    public function showAdd()
    {
        return view('pages.gudang.add');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nama' => 'required',
            'location' => 'required',
        ]);
        

        Gudang::create([
            'nama' => $request->nama,
            'location' => $request->location
        ]);

        return redirect()->route('gudang')->with(['message' => 'Gudang added', 'alert' => 'alert-success']);
    }

    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id)->delete();

        return redirect()->route('gudang')->with(['message' => 'Gudang deleted', 'alert' => 'alert-danger']);
    }

    public function showEdit($id)
    {
        $gudang = Gudang::find($id);

        return view('pages.gudang.edit', compact('gudang'));
    }

    public function update($id, Request $request)
    {
        $gudang = Gudang::find($id);

        $request->validate([
            'nama' => 'required',
            'location' => 'required',
        ]);

        $gudang->nama = $request->nama;
        $gudang->location = $request->location;
        $gudang->save();

        return redirect()->route('gudang')->with(['message' => 'Gudang updated', 'alert' => 'alert-success']);
    }
}
