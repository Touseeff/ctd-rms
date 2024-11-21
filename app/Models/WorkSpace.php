<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkSpace extends Model
{
    use HasFactory;

    protected $table = 'work_space';

    protected $fillable = [
        'department_id',
        'section_id',
        'user_id',
        'work_space_name',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function boards()
    {
        return $this->hasMany(Board::class, 'work_space_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'workspace_id');
    }
}
