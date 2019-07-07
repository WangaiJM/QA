<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUpdatedDateAttribute(){
        return $this->updated_at->diffForHumans();
    }
}
