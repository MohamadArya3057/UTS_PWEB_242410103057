<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PageController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = $request->input('username');
        return Redirect::route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request): View
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request): View
    {
        $username = $request->query('username', 'Guest');
        return view('profile', ['username' => $username]);
    }

    public function pengelolaan(Request $request): View
    {
        $username = $request->query('username', 'Guest');

        $dataBuku = [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'stok' => 10,
                'foto' => asset('assets/images/laskar.png')
            ],
            [
                'id' => 2,
                'judul' => 'Harry Potter and the Sorcerer\'s Stone',
                'penulis' => 'J. K. Rowling',
                'stok' => 8,
                'foto' => asset('assets/images/harry.jpg')
            ],
            [
                'id' => 3,
                'judul' => 'The Lord of the Rings',
                'penulis' => 'J.R.R. Tolkien',
                'stok' => 12,
                'foto' => asset('assets/images/LOTR.jpg')
            ],
            [
                'id' => 4,
                'judul' => 'The Hobbit',
                'penulis' => 'J.R.R. Tolkien',
                'stok' => 8,
                'foto' => asset('assets/images/hobbit.jpg')
            ]
        ];

        return view('pengelolaan', [
            'username' => $username,
            'buku' => $dataBuku 
        ]);
    }
}

