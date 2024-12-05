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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workspace()
    {
        return $this->belongsTo(WorkSpace::class, 'work_space_id');
    }

    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class, 'task_file');
    }




    public function taskUsers()
    {
        return $this->hasMany(TaskUser::class);
    }

    // Define the relationship with TaskFile
    public function taskFiles()
    {
        return $this->hasMany(TaskFile::class);
    }
    
}
