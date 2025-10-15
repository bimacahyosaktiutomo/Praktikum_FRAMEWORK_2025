<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Pertemuan 5
    public function dashboard() {
        $data = User::all();

        return view('dashboard.user', [
            'data' => $data,
            'title' => 'Dashboard Pengguna'
        ]);
    }
    //end
}
