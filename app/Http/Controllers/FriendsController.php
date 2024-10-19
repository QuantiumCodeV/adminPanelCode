<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friends;
use App\Http\Service\SoundLineApiService;

class FriendsController extends Controller
{

    private $soundLineApiService;

    public function __construct(SoundLineApiService $soundLineApiService)
    {
        $this->soundLineApiService = $soundLineApiService;
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'user_identifier' => 'required|string',
        ]);

        $user = auth()->user();
        $response = $this->soundLineApiService->addFriend($user->token, [
            'user_identifier' => $data['user_identifier']
        ]);

        if ($response->successful()) {
            return response()->json(['message' => 'успех']);
        }

        return response()->json(['message' => 'Не удалось добавить друга'], 500);
    }

    public function getFriends()
    {
        $user = auth()->user();
        $response = $this->soundLineApiService->getFriends($user->token);

        if ($response->successful()) {
            return response()->json(['friends' => $response->json()]);
        }

        return response()->json(['error' => 'Не удалось получить список друзей'], 500);
    }

    public function remove(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $user = auth()->user();
        $response = $this->soundLineApiService->deleteFriend($user->token, [
            'friend_id' => $data['friend_id']
        ]);

        if ($response->successful()) {
            return response()->json(['message' => 'успех']);
        }

        return response()->json(['message' => 'Не удалось удалить друга'], 500);
    }

    public function block(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $user = auth()->user();
        $response = $this->soundLineApiService->toggleBlockFriend($user->token, [
            'friend_id' => $data['friend_id'],
            'action' => 'block'
        ]);

        if ($response->successful()) {
            return response()->json(['message' => 'успех']);
        }

        return response()->json(['message' => 'Не удалось заблокировать друга'], 500);
    }

    public function accept(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $user = auth()->user();
        $response = $this->soundLineApiService->respondToFriendRequest($user->token, [
            'friend_id' => $data['friend_id'],
            'action' => 'accept'
        ]);

        if ($response->successful()) {
            return response()->json(['message' => 'успех']);
        }

        return response()->json(['message' => 'Не удалось принять запрос на дружбу'], 500);
    }

    public function decline(Request $request)
    {
        $data = $request->validate([
            'friend_id' => 'required|string',
        ]);

        $user = auth()->user();
        $response = $this->soundLineApiService->respondToFriendRequest($user->token, [
            'friend_id' => $data['friend_id'],
            'action' => 'decline'
        ]);

        if ($response->successful()) {
            return response()->json(['message' => 'Запрос на дружбу отклонен']);
        }

        return response()->json(['message' => 'Не удалось отклонить запрос на дружбу'], 500);
    }
}
