<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'file_id', 'parent_id', 'body'];

    // Relationship To File
    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }

    // Relationship To Owner
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Relationship To Children
    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    //Relationship To Parent
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }
}
