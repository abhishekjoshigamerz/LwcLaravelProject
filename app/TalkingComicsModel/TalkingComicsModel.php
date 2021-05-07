<?php

namespace App\TalkingComicsModel;

use Illuminate\Database\Eloquent\Model;

class TalkingComicsModel extends Model
{
    protected $table="talking_comics_models";

    protected $primarykey = "talking_comics_models_id";

    protected $fillable = ['talkcomics_name','talkcomics_class_url','talkcomics_subject_url','talkcomics_subsubject_url','talkcomicsthumbnail_link','talkcomics_link','language'];
}
