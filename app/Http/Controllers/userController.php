<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    public function register(Request $request) {
        $resultados = $request->validate([
            'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name')],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password'=> ['required', 'min:8', 'max:20']
        ]);

        $resultados['password'] = bcrypt($resultados['password']);
        $user = User::create($resultados);
        auth()->login($user);

        return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request) {
        $resultados = $request->validate([
            'loginName' => ['required'],
            'loginPassword' => ['required']
        ]);

        if (auth()->attempt(['name' => $resultados['loginName'],'password' => $resultados['loginPassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}
