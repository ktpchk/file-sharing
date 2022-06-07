<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class File extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'comment', 'size', 'user_id', 'path'];

    public function scopeFilter($query, $search)
    {
        if ('search' ?? false) {
            $query->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('comment', 'LIKE', '%' . $search . '%');
        }
    }

    // Relationship To User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Relationship To Content
    public function content()
    {
        return $this->hasOne(Content::class, 'file_id');
    }
}
