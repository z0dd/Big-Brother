<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return Users::all();
    }
 
    public function show($id)
    {
        return Users::find($id);
    }

    public function store(Request $request)
    {
        return Users::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);
        $user->update($request->all());

        return $user;
    }

    public function delete(Request $request, $id)
    {
        $user = Users::findOrFail($id);
        $user->delete();

        return 204;
    }
}
