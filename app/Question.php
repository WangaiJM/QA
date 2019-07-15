<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title', 'question'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function getBodyHtmlAttribute(){
        return \Parsedown::instance()->text($this->question);
    }

    public function getUrlAttribute(){
        return route("questions.show", $this->slug);
    }

    public function getStatusAttribute(){
        if($this->answers > 0){
            If($this->best_answer_id){
                return "answered-accepted";
            }
            return "answered";
        }
        return "unanswered";
    }
}
