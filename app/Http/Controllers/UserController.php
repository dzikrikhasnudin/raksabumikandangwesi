<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:user_create', ['only' => ['store']]);
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('Rabuka2023.'),
        ]);

        $user->assignRole($request->role);
        Alert::toast('Pengguna berhasil ditambahkan', 'success');

        return back();
    }
}
