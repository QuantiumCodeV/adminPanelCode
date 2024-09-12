<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Validator;

class ChatController extends Controller
{
    public static function getChats()
    {
        $user = auth()->user();
        $chats = Message::where('user_id', $user->id)
            ->orWhere('recipient_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($item) use ($user) {
                return $item->user_id === $user->id ? $item->recipient_id : $item->user_id;
            })
            ->map(function ($group) use ($user) {
                $otherUserId = $group->first()->user_id === $user->id ? $group->first()->recipient_id : $group->first()->user_id;
                return [
                    'recipient' => \App\Models\User::find($otherUserId),
                    'last_message' => $group->sortByDesc('created_at')->first()
                ];
            })
            ->values();

        return $chats;
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required|string',
            'user_id' => 'required|integer',
            'friendId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $message = new Message();
        $message->user_id = $request->user_id;
        $message->recipient_id = $request->friendId;
        $message->message = $request->message;
        $message->save();

        return response()->json(['message' => 'Message sent successfully']);



    }

    public function get(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'friendId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user_id = $request->user_id;
        $friend_id = $request->friendId;

        $messages = Message::where(function ($query) use ($user_id, $friend_id) {
            $query->where('user_id', $user_id)->where('recipient_id', $friend_id);
        })->orWhere(function ($query) use ($user_id, $friend_id) {
            $query->where('user_id', $friend_id)->where('recipient_id', $user_id);
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['messages' => $messages]);
    }
}
