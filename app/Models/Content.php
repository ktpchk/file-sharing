<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'file_id', 'path'];

    // Relationship To File
    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }
}
