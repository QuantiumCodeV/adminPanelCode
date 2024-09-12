<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        $userId = auth()->id();

        $friends1 = $this->where(function ($query) use (userId) {
            $query->where('user_id_first', $userId)
                ->orWhere('user_id_second', $userId);
        })->where('status', 'pending')->pluck('user_id_first', 'user_id_second')->flatten()->unique();

        $friends2 = $this->where(function ($query) use ($userId2) {
            $query->where('user_id_first', $userId2)
                ->orWhere('user_id_second', $userId2);
        })->where('status', 'pending')->pluck('user_id_first', 'user_id_second')->flatten()->unique();

        $commonFriendIds = $friends1->intersect($friends2)->diff([$userId1, $userId2]);

        return User::whereIn('id', $commonFriendIds)->get();
    }
}
