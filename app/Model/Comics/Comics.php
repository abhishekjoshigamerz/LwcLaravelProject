<?php

namespace App\Model\Comics;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $table = 'comics';
    protected $primaryKey = 'comics';

    public function isofSubject(){
        return $this->belongsTo('App\Model\Subject\Subject','comics_subject_id','subject_id');
    }
}
