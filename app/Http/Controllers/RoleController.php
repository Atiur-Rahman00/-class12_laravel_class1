<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Str;
use Carbon\Carbon;
class Rolecontroller extends Controller
{
    //to show add form
    function addform(){
        return view('role.add');
    }

    function storerole(Request $request){
        $request->validate([
            'role' => 'required',
        ]);
        // print_r($request->all());
        $role = Str::lower($request->role);

        Role::insert([
            'role' => $role,
            'created_at' => Carbon::now(),
        ]);
    }
}
