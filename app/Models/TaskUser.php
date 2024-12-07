<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    use HasFactory;

    protected $table = 'task_user';
    protected $fillable = ['task_id', 'user_id'];

    // TaskUser belongs to a Task
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    // TaskUser belongs to a User (user assigned to the task)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
