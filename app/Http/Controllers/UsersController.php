<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function login(Request $request)

    {

        // Валидация входящих данных

        $request->validate([

            'login' => 'required',

            'password' => 'required',

        ]);



        $credentials = $request->only('login', 'password');


        // Попробуйте аутентифицировать пользователя

        if (Auth::attempt($credentials)) {

            return response()->json(['message' => 'success', 'url' => route('home')]);
        } else {

            return response()->json(['message' => 'error', 'error' => 'Invalid credentials'], 401);
        }
    }


    public function register(Request $request)

    {

        // Валидация входящих данных

        $request->validate([

            'email' => 'required|unique:users,login',

            'password' => 'required|min:6',

        ]);


        // Создание нового пользователя

        $user = new User();

        $user->login = $request->input('email');

        $user->password = Hash::make($request->input('password')); // Хешируем пароль

        $user->save();


        // Аутентификация нового пользователя

        Auth::login($user, false);

        return response()->json(['message' => 'success', 'user' => $user, 'url' => route('createProfile')]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // Максимальный размер 2 МБ
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        $user = User::find($request->input('user_id'));
        $user->avatar = ($path);
        $user->save();

        return response()->json(['message' => 'success', 'user' => $user, 'path' => asset("storage/".$path)]);
    }
}
