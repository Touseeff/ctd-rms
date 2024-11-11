<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    /**
     * Get the users for the section.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
