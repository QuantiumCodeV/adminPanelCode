<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class WorkerController extends Controller
{
    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $worker = Workers::find($request->id);

        $worker->delete();

        return response()->json(['message' => 'Worker deleted successfully'], 200);
    }

    public function status(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $worker = Workers::find($request->id);

        $worker->status = $request->status;

        $worker->save();

        return response()->json(['status' => $worker->status], 200);
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $worker = new Workers;

        $worker->name = $request->name;
        $worker->password = bcrypt($request->password);

        $worker->save();

        return response()->json(['message' => 'Worker created successfully'], 200);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $credentials = [
            'name' => $request->login,
            'password' => $request->password,
        ];

        if (Auth::guard('worker')->attempt($credentials)) {
            // Authentication successful
            return redirect()->route("index");
        } else {
            // Authentication failed
            return redirect()->route("admin.login");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("admin.login");
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $worker = Workers::find($request->id);

        $worker->password = bcrypt($request->password);

        $worker->save();

        return response()->json(['message' => 'Password changed successfully'], 200);
    }
}
