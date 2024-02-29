<?php

namespace App\Models;

use App\Events\FileDeletingEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'url',
        'git_url'
    ];
    protected $hidden = [
        'paswword',
        'remember_token',
        'created_at',
        'updated_at'
    ];
    protected $perPage = 20;

    protected $dispatchesEvents = [
        'deleting' => FileDeletingEvent::class
    ];
}
