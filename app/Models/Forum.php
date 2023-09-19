<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $appends = ['image_url',"published_at"];

    public function comments(){
        return $this->hasMany(ForumComment::class);
    }

    public function tags(){
        return $this->hasMany(ForumTag::class);
    }

    public function user(){
       return  $this->belongsTo(User::class,"created_by","id");
    }

    public function getImageUrlAttribute(){

        return config('app.url')."/storage/uploads/forums/".$this->forum_image;
    }

    public function getPublishedAtAttribute(){

        return text_date($this->created_at);
    }
}
