<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
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
     * Get the users for the department.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the projects associated with this department.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }


    public function sections()
{
    return $this->hasMany(Section::class, 'department_id');
}

}
