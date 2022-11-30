<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stream extends Model
{
    use HasFactory;

    public $fillable=[
        'stream_name'
    ];


    public function students():HasMany
    {
        return $this->hasMany(User::class);
    }
}
