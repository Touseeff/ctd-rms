<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class TaskFile extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'file_id'];

    // Define the relationship with Task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Define the relationship with File
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
