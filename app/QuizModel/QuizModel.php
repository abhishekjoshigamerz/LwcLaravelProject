<?php

namespace App\QuizModel;

use Illuminate\Database\Eloquent\Model;

class QuizModel extends Model
{
    protected $table="quiz_models";

    protected $primarykey = "quiz_id";

    protected $fillable = ['quiz_name','quiz_class_url','quiz_subject_url','quiz_subsubject_url','quizthumbnail_link','quiz_link','language'];
}
