<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskFile extends Model
{
    use HasFactory;

    protected $table = 'task_files';
    protected $fillable = ['task_id', 'file_id'];

    // TaskFile belongs to a Task
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    // TaskFile belongs to a File (if you have a separate File model)
    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }
}
