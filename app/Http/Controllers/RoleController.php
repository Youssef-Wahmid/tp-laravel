<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // $roles = Role::all();
        // return view('myviews.role', ['roles' => $roles]);
    }

    public function create()
    {
        return view('myviews.role');
    }

    public function store(Request $request)
    {
        if (auth()->user()->type === "super") {
            Role::create([
            'nom' => $request->role_name
        ]);
        return"okkkkkk";
        } else {
            return"Pas autorize";
        }


    }
}
