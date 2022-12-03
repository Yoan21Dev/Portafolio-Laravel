<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];


    public function getGetExcerptAttribute()
    {
        return substr($this->description, 0, 40);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
