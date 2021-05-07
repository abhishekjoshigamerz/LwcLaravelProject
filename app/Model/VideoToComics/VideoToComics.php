<?php

namespace App\Model\VideoToComics;

use Illuminate\Database\Eloquent\Model;

class VideoToComics extends Model
{
    protected $table="video_to_comics";

    protected $primarykey = "video_to_comics_id";

    protected $fillable = ['comicstovideo_name','comicstovideo_thumbnail','comicstovideo_pdf_file','languagetovideo','url_slug','class_slug','subject_url','subsubject','comictovideo_description','comicstovideo_tags_for_search','video_to_comics_iframe_code'];
}

