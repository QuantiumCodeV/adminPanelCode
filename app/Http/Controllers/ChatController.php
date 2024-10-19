<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Validator;
use App\Http\Service\SoundLineApiService;

class ChatController extends Controller
{
    private $soundLineApiService;

    public function __construct(SoundLineApiService $soundLineApiService)
    {
        $this->soundLineApiService = $soundLineApiService;
    }

    public function getChats()
    {
        $user = auth()->user();
        $response = $this->soundLineApiService->getChats($user->token);

        if ($response->successful()) {
            return $response->json();
        }

        return [];
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required|string',
            'friendId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = auth()->user();
        $response = $this->soundLineApiService->sendMessage($user->token, [
            'recipient_id' => $request->friendId,
            'message' => $request->message
        ]);

        if ($response->successful()) {
            return response()->json(['message' => 'Сообщение успешно отправлено']);
        }

        return response()->json(['error' => 'Не удалось отправить сообщение'], 500);
    }

    public function get(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'friendId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = auth()->user();
        $response = $this->soundLineApiService->getChatMessages($user->token, $request->friendId);

        if ($response->successful()) {
            return response()->json(['messages' => $response->json()]);
        }

        return response()->json(['error' => 'Не удалось получить сообщения'], 500);
    }

    public function markAsRead(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'friendId' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Примечание: API не предоставляет метод для отметки сообщений как прочитанных.
        // Этот функционал может потребовать дополнительной реализации на стороне API.

        return response()->json(['message' => 'Сообщения отмечены как прочитанные']);
    }
}
