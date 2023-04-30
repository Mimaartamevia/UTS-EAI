<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        return Buku::all();
    }
 
    public function show($id)
    {
        return Buku::find($id);
    }

    public function store(Request $request)
    {
        $Buku= Buku::create($request->all());
        return response()->json($Buku, 201);
    }

    public function update(Request $request, $id)
    {
        $Buku = Buku::findOrFail($id);
        $Buku->update($request->all());

        return $Buku;
    }

    public function delete(Request $request, $id)
    {
        $Buku = Buku::findOrFail($id);
        $Buku->delete();

        return 204;
    }
}
