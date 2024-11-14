<?php

namespace App\Models;

<<<<<<< HEAD
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable;

=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
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

<<<<<<< HEAD
=======
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

<<<<<<< HEAD
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
=======
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }

 
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
}
