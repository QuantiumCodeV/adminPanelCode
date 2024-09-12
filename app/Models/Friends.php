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


    public function mutualFriends(){
            return User::whereHas('friends', function ($query) {
                $query->where(function ($q) {
                    $q->where('user_id_first', $this->user_id_first)
                      ->orWhere('user_id_first', $this->user_id_second);
                })->where(function ($q) {
                    $q->where('user_id_second', $this->user_id_first)
                      ->orWhere('user_id_second', $this->user_id_second);
                });
            })->where('id', '!=', $this->user_id_first)
              ->where('id', '!=', $this->user_id_second);
    }
}
