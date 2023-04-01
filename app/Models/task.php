<?php

namespace App\Models;

use App\Models\user;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class task extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user()
    {
    return $this->belongsTo(user::class);
    }
}
