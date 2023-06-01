<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'picture'];
    
    public static function find($id) {
        $photos = self::all();

        foreach($photos as $photo) {
            if($photo['id'] == $id) {
                return $photo;
            }
        }
    }
}
