<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Service\SoundLineApiService;

class UsersController extends Controller
{

    private $soundLineApiService;

    public function __construct(SoundLineApiService $soundLineApiService)
    {
        $this->soundLineApiService = $soundLineApiService;
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('login', 'password');

        $response = $this->soundLineApiService->login($credentials);

        if ($response->successful()) {
            $user = $response->json();
            Auth::login($user);
            return response()->json(['message' => 'success', 'url' => route('home')]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Неверные учетные данные'], 401);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $response = $this->soundLineApiService->register([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if ($response->successful()) {
            $user = $response->json();
            Auth::login($user);
            return response()->json(['message' => 'success', 'user' => $user, 'url' => route('createProfile')]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось зарегистрироваться'], 400);
        }
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        $response = $this->soundLineApiService->uploadAvatar(Auth::user()->token, [
            'avatar' => $path
        ]);

        if ($response->successful()) {
            $user = $response->json();
            return response()->json(['message' => 'success', 'user' => $user, 'path' => asset("storage/" . $path)]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось загрузить аватар'], 400);
        }
    }

    public function logout(Request $request)
    {
        $response = $this->soundLineApiService->logout(Auth::user()->token);

        if ($response->successful()) {
            Auth::logout();
            return redirect(route('index'));
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось выйти'], 400);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'subname' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'error', 'errors' => $validator->errors()], 422);
        }

        $response = $this->soundLineApiService->updateUser(Auth::user()->token, [
            'name' => $request->input('name'),
            'subname' => $request->input('subname')
        ]);

        if ($response->successful()) {
            $user = $response->json();
            return response()->json(['message' => 'success', 'user' => $user]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось обновить информацию'], 400);
        }
    }

    public function change_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'error', 'errors' => $validator->errors()], 422);
        }

        $response = $this->soundLineApiService->changeLogin(Auth::user()->token, [
            'login' => $request->input('login')
        ]);

        if ($response->successful()) {
            $user = $response->json();
            return response()->json(['message' => 'success', 'user' => $user]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось изменить логин'], 400);
        }
    }

    public function change_name(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'error', 'errors' => $validator->errors()], 422);
        }

        $response = $this->soundLineApiService->changeName(Auth::user()->token, [
            'name' => $request->input('name')
        ]);

        if ($response->successful()) {
            $user = $response->json();
            return response()->json(['message' => 'success', 'user' => $user]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось изменить имя'], 400);
        }
    }

    public function change_subname(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subname' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'error', 'errors' => $validator->errors()], 422);
        }

        $response = $this->soundLineApiService->changeSubname(Auth::user()->token, [
            'subname' => $request->input('subname')
        ]);

        if ($response->successful()) {
            $user = $response->json();
            return response()->json(['message' => 'success', 'user' => $user]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось изменить фамилию'], 400);
        }
    }

    public function changeInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|unique:users,login,' . Auth::id(),
            'name' => 'required',
            'subname' => 'required',
            'password' => 'min:5|nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'error', 'errors' => $validator->errors()], 422);
        }

        $data = [
            'login' => $request->input('login'),
            'name' => $request->input('name'),
            'subname' => $request->input('subname')
        ];

        if ($request->input('password')) {
            $data['password'] = $request->input('password');
        }

        $response = $this->soundLineApiService->changeInfo(Auth::user()->token, $data);

        if ($response->successful()) {
            $user = $response->json();
            return response()->json(['message' => 'success', 'user' => $user]);
        } else {
            return response()->json(['message' => 'error', 'error' => 'Не удалось изменить информацию'], 400);
        }
    }
}
