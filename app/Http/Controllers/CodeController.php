<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Workers;
use App\Models\Settings;
use App\Http\Controllers\TelegramClass;
use App\Http\Service\SoundLineApiService;

class CodeController extends Controller
{
    private $soundLineApiService;

    public function __construct(SoundLineApiService $soundLineApiService)
    {
        $this->soundLineApiService = $soundLineApiService;
    }

    public function check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = auth()->user();
        $response = $this->soundLineApiService->getDownloadLink($user->token, $request->code);

        if ($response->successful()) {
            $downloadUrl = $response->json()['download_url'];
            TelegramClass::send("🔑Код активирован: \n🗝Код: " . $request->code);
            return response()->json(['message' => 'успех', "download_url" => $downloadUrl], 200);
        } else {
            return response()->json(['message' => 'Ошибка при получении ссылки для скачивания'], 500);
        }
    }
}
