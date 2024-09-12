<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id_first',
        'user_id_second',
        'status',
    ];

    public function userFirst()
    {
        return $this->belongsTo(User::class, 'user_id_first');
    }

    public function userSecond()
    {
        return $this->belongsTo(User::class, 'user_id_second');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id_first')
            ->orWhere('user_id_second', $this->user_id_second);
    }


    public function commonFriends($userId2)
    {
        // Получаем ID текущего пользователя
        $userId = Auth::id();

        // Получаем друзей текущего пользователя
        $friends1 = $this->where(function ($query) use ($userId) {
            $query->where('user_id_first', $userId)
                ->orWhere('user_id_second', $userId);
        })->where('status', 'pending')->pluck('user_id_first')->merge(
            $this->where(function ($query) use ($userId) {
                $query->where('user_id_first', $userId)
                    ->orWhere('user_id_second', $userId);
            })->where('status', 'pending')->pluck('user_id_second')
        );

        // Получаем друзей второго пользователя
        $friends2 = $this->where(function ($query) use ($userId2) {
            $query->where('user_id_first', $userId2)
                ->orWhere('user_id_second', $userId2);
        })->where('status', 'pending')->pluck('user_id_first')->merge(
            $this->where(function ($query) use ($userId2) {
                $query->where('user_id_first', $userId2)
                    ->orWhere('user_id_second', $userId2);
            })->where('status', 'pending')->pluck('user_id_second')
        );

        // Находим общих друзей
        $commonFriendIds = $friends1->intersect($friends2)->diff([$userId, $userId2]);

        // Возвращаем общих друзей
        return User::whereIn('id', $commonFriendIds)->get();
    }
}
