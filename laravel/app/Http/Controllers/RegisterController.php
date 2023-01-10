<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Termwind\render;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if (auth()->check()) {
            $validateFields = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if(User::where('email', $validateFields['email'])->exists()){
                redirect(route('user.registration'))->withErrors([
                   'email'=>'Такой пользователь уже существует',
                ]);
            }
            $user = User::create($validateFields);
            if ($user) {
                auth()->login($user);
                return redirect()->to(route('user.private'));
            }
            return redirect(route('user.login'))->withErrors([
                'formError' => 'Произошла ошибка с пользователем',
            ]);
        }
    }
}
