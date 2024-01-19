<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Tambahkan fungsi-fungsi CRUD sesuai kebutuhan
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Fungsi-fungsi CRUD lainnya
}



