<?php

namespace App\Model\Subject;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    public function getCL(){
        return $this->belongsTo('App\Model\Category\Category','class_subject_id','category_id');
    }

    
}
