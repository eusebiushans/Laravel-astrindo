<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }
    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'tgllhr' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'pnddkn' => 'required',
            'kampus' => 'required',
            'prodi' => 'required',
            'ktp' => 'required',
            'ijazah' => 'required',
        ]);

        User::create($validatedData);

        return redirect('/profile');
    }
}
