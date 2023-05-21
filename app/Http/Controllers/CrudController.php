<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index()
    {
       
        $students = DB::table('students')->get();
        return view('crud.index',compact('students'));
    }
    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {


        // $user['id'] = 1;
        // $user['name'] = 'dale';

        // DB::table('users')->insert($user);


        DB::table('students')->insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()->route('crud');
    }
}
