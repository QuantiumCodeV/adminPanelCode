<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friends;

class FriendsController extends Controller
{

    public function add(Request $request)
    {
        $data = $request->validate([
            'user_identifier' => 'required|string',
        ]);

        $user = User::where('id', $data['user_identifier'])
            ->orWhere('login', $data['user_identifier'])
            ->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $friend = Friends::create([
            'user_id_first' => auth()->id(),
            'user_id_second' => $user->id,
            'status' => 'pending',
        ]);

        return response()->json(['message' => 'Friend request sent successfully']);
    }

    public function remove(Request $request)
    {
        $data = $request->validate([
            'user_id_first' => 'required|string',
            'user_id_second' => 'required|string',
        ]);

        \DB::table('friends')
            ->where('user_id_first', $data['user_id_first'])
            ->where('user_id_second', $data['user_id_second'])
            ->orWhere(function ($query) use ($data) {
                $query->where('user_id_first', $data['user_id_second'])
                      ->where('user_id_second', $data['user_id_first']);
            })
            ->delete();

        return response()->json(['message' => 'Friend removed successfully']);
    }

    public function block(Request $request)
    {
        $data = $request->validate([
            'user_id_first' => 'required|string',
            'user_id_second' => 'required|string',
        ]);

        \DB::table('friends')->updateOrInsert(
            [
                'user_id_first' => $data['user_id_first'],
                'user_id_second' => $data['user_id_second'],
            ],
            [
                'status' => 'blocked',
                'updated_at' => now(),
            ]
        );

        return response()->json(['message' => 'User blocked successfully']);
    }

    public function unblock(Request $request)
    {
        $data = $request->validate([
            'user_id_first' => 'required|string',
            'user_id_second' => 'required|string',
        ]);

        \DB::table('friends')
            ->where('user_id_first', $data['user_id_first'])
            ->where('user_id_second', $data['user_id_second'])
            ->where('status', 'friend')
            ->delete();

        return response()->json(['message' => 'User unblocked successfully']);
    }

    public function accept(Request $request)
    {
        $data = $request->validate([
            'user_id_first' => 'required|string',
            'user_id_second' => 'required|string',
        ]);

        \DB::table('friends')
            ->where('user_id_first', $data['user_id_first'])
            ->where('user_id_second', $data['user_id_second'])
            ->where('status', 'pending')
            ->update(['status' => 'friend', 'updated_at' => now()]);

        return response()->json(['message' => 'Friend request accepted']);
    }

    public function decline(Request $request)
    {
        $data = $request->validate([
            'user_id_first' => 'required|string',
            'user_id_second' => 'required|string',
        ]);

        \DB::table('friends')
            ->where('user_id_first', $data['user_id_first'])
            ->where('user_id_second', $data['user_id_second'])
            ->where('status', 'pending')
            ->delete();

        return response()->json(['message' => 'Friend request declined']);
    }
}
