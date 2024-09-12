<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'avatar',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function friendsAsFirst()
    {
        return $this->hasMany(Friends::class, 'user_id_first');
    }

    public function friendsAsSecond()
    {
        return $this->hasMany(Friends::class, 'user_id_second');
    }

    public function friends()
    {
        return $this->friendsAsFirst()->orWhere('user_id_second', $this->id);
    }

    public function mutualFriends(User $otherUser)
    {
        return (new Friends)->commonFriends($otherUser->id);
    }
}
