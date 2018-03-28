<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaceToken;

class FaceIdsController extends Controller
{
    public function index()
    {
        return FaceToken::all();
    }
 
    public function show($id)
    {
        return FaceToken::find($id);
    }

    public function store(Request $request)
    {
        return FaceToken::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $faceToken = FaceToken::findOrFail($id);
        $faceToken->update($request->all());

        return $faceToken;
    }

    public function delete(Request $request, $id)
    {
        $faceToken = FaceToken::findOrFail($id);
        $faceToken->delete();

        return 204;
    }
}
