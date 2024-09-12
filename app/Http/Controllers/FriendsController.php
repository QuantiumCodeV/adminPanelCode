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
        if ($user->id == auth()->id()) {
            return response()->json(['message' => 'You cannot add yourself as a friend'], 400);
        }

        $existingFriend = Friends::where(function ($query) use ($user) {
            $query->where('user_id_first', auth()->id())
                ->where('user_id_second', $user->id);
        })->orWhere(function ($query) use ($user) {
            $query->where('user_id_first', $user->id)
                ->where('user_id_second', auth()->id());
        })->first();

        if ($existingFriend) {
            return response()->json(['message' => 'Friend request already sent or you are already friends'], 400);
        }

        $friend = Friends::create([
            'user_id_first' => auth()->id(),
            'user_id_second' => $user->id,
            'status' => 'pending',
        ]);

        return response()->json(['message' => 'success']);
    }


    public static function getFriends()
    {
        $friends = Friends::where(function ($query) {
            $query->where('user_id_first', auth()->id())
                ->orWhere('user_id_second', auth()->id());
        })->get();

        return $friends;
    }

    public function remove(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $friend_request = Friends::where('user_id_second', $data['friend_id']);

        $friend_request->status = 'blocked';
        $friend_request->save();

        return response()->json(['message' => 'Friend removed successfully']);
    }

    public function block(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $friend_request = Friends::where('user_id_second', $data['friend_id']);

        $friend_request->delete();

        return response()->json(['message' => 'User blocked successfully']);
    }

    public function accept(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $friend_request = Friends::where('user_id_second', $data['friend_id']);

        $friend_request->status = 'friend';
        $friend_request->save();
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
