<?php

namespace App\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $primaryKey = 'category_id';
  
    public function subjects(){
        return $this->hasMany('App\Model\Subject\Subject','class_subject_id');
    }
}
