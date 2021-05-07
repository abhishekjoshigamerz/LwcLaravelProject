<?php

namespace App\Model\PDFComics;

use Illuminate\Database\Eloquent\Model;

class PDFComics extends Model
{
    protected $table="p_d_f_comics";

    protected $primarykey = "pdfcomics_id";

    protected $fillable = ['comics_name','comics_thumbnail','comics_pdf_file','language','url_slug','comics_category_id','comics_subject_id','subsubject','comic_description','comics_tags_for_search','likecounter'];
}
