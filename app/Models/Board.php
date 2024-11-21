<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_space_id',
        'user_id',
        'borad_name',
        'status',
    ];

    public function workSpace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'board_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'board_id');
    }
}
