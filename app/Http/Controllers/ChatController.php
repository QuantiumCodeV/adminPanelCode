<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            ->map(function ($group) {
                return $group->first();
            })
            ->values();

        return $chats;
    }
}
