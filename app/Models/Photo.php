<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'photo', 'user_id'];

    public static function find($id)
    {
        $photos = self::all();

        foreach ($photos as $photo) {
            if ($photo['id'] == $id) {
                return $photo;
            }
        }
    }

    //Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Relationship to comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}