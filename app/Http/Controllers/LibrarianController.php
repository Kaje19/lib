<?php

namespace App\Http\Controllers;
use App\Models\Librarian;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class LibrarianController extends Controller
{
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        $data = $request->validate([
          'name'=> 'required',
          'username' => 'required',
          'password' => 'required',  
        ]);
        $newLibrarian = Librarian::create($data);
        return redirect(route('librarian.login'));
    }

    public function librarianAuthentication(Request $request) {
        $user = Librarian::where('username','=',$request->username)->first();
        if($user && $request->password == $user->password) {
            return redirect(route('dashboard'));
        } else {
            return redirect(route('librarian.login'))->with('message', 'Incorrect Credentials!');;
        }
    }
}

