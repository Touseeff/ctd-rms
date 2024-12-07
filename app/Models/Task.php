<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'work_space_id',
        'board_id',
        'project_id',
        'card_title',
        'descriptions',
        'file_attached',
        'file_size',
        'process_status',
        'assign_to',
        'status',
        'start_date',
        'end_date',
    ];

    // Task belongs to a User (creator of the task)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Task belongs to a Workspace
    public function workspace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id');
    }

    // Task belongs to a Board
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    // Task belongs to a Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // Many-to-Many: Users assigned to the task
    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }

    // One-to-Many: Task Users for pivot table operations
    public function taskUsers()
    {
        return $this->hasMany(TaskUser::class, 'task_id');
    }

    // One-to-Many: Task Files
    public function taskFiles()
    {
        return $this->hasMany(TaskFile::class, 'task_id');
    }
}
