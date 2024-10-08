<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Worker extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'status',
    ];
    
    
        /**
         * Check if the worker has a specific role.
         *
         * @param string $role
         * @return bool
         */
        public function hasRole($role)
        {
            // Assuming the worker has a 'role' attribute
            return $this->status === $role;
        }
    

    protected $casts = [
        'password' => 'hashed',
    ];
}
