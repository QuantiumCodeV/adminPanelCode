<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    use HasFactory;

    protected $table = 'codes';

    public function getCodeById($id)
    {
        return $this->find($id);
    }

    protected $fillable = ["id","code", "status", "userId"];
}
