<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notification';

    protected $fillable = [
        'user_id',
        'project_id',
        'task_id',
        'notification_type',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the user that owns the notification.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the project associated with the notification.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the task associated with the notification.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
