<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id', 'photo_id'];
    
    public static function find($id) {
        $comments = self::all();

        foreach($comments as $comment) {
            if($comment['id'] == $id) {
                return $comment;
            }
        }
    }

    //Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Relationship to photos
      public function photo() {
        return $this->belongsTo(Photo::class);
    }
}
