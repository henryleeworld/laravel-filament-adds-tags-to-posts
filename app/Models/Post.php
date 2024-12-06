<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasTags;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'text',
    ];
}
