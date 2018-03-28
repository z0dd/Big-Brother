<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaceUser;

class FaceUsersController extends Controller
{
    public function index()
    {
        return FaceUser::all();
    }
 
    public function show($id)
    {
        return FaceUser::find($id);
    }

    public function store(Request $request)
    {
        return FaceUser::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $faceUser = FaceUser::findOrFail($id);
        $faceUser->update($request->all());

        return $faceUser;
    }

    public function delete(Request $request, $id)
    {
        $faceUser = FaceUser::findOrFail($id);
        $faceUser->delete();

        return 204;
    }
}
