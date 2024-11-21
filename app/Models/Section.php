<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the users for the section.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'section_id');
    }

    /**
     * Get the projects associated with this section.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }


    public function department()
{
    return $this->belongsTo(Department::class, 'department_id');
}

}
