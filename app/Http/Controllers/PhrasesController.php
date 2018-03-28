<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phrase;

class PhrasesController extends Controller
{
    public function index()
    {
        return Phrase::all();
    }
 
    public function show($id)
    {
        return Phrase::find($id);
    }

    public function store(Request $request)
    {
        return Phrase::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $phrase = Phrase::findOrFail($id);
        $phrase->update($request->all());

        return $phrase;
    }

    public function delete(Request $request, $id)
    {
        $phrase = Phrase::findOrFail($id);
        $phrase->delete();

        return 204;
    }
}
