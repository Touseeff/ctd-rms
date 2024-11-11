<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'role_id',
        'department_id',
        'section_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'contact_number',
        'date_of_birth',
        'gendar',
        'qualification',
        'designation',
        'department',
        'joining_date',
        'skills',
        'address',
        'profile_image',
        'designation_role',
        'email_verification_token',
        'reset_password_token',
        'role_type',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the department that the user belongs to.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the section that the user belongs to.
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
