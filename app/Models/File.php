<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['file_name', 'file_size', 'file_path'];

    // Define the relationship with TaskFile
    public function taskFiles()
    {
        return $this->hasMany(TaskFile::class);
    }

}
