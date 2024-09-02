<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = Users::where('login', $email)->where('password', $password)->first();

        if ($user) {
            return response()->json(['message' => 'success', "url" => route('home')]);
        } else {
            return response()->json(['message' => 'error']);
        }
    }

    public function register(Request $request)
    {
        $login = $request->input('email');
        $password = $request->input('password');

        $user = new Users();
        $user->login = $login;
        $user->password = $password;
        $user->save();

        return response()->json(['message' => 'success', 'url' => route('successCreateProfile')]);
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('avatars', $fileName, 'public');

        $user = Users::find($request->input('user_id'));
        $user->avatar = $fileName;
        $user->save();

        return response()->json(['message' => 'success']);
    }
}
