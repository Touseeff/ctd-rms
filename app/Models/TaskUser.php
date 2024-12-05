<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class TaskUser extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'user_id'];

    // Define the relationship with Task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
