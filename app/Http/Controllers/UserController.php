<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = 'Listado de Usuarios';

        return view('users.index')
            ->with('users',User::all())
            ->with('title','Listado de Usuarios');

        
        return view('users.index',compact('title','users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        
        // if($user == null){
        //     return view('errors.404');
        // }

        return view('users.show',compact('user'));
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function store()
    {

        $data = request()->all();

        if (empty($data['name']))
        {
            return redirect('usuarios/nuevo')->withErrors([
                'name'=>'Es necesario un nombre'
            ]);
        }

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
        return redirect()->route('users.index');
    }
}
