<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model


{
    protected $table ='notification';

    protected $fillable = [
        'user_id',
        'project_id',
        'task_id',
        'notification_type',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];
}
