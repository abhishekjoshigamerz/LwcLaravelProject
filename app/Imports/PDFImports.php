<?php

namespace App\Imports;

use App\Model\PDFComics\PDFComics;
use Maatwebsite\Excel\Concerns\ToModel;

class PDFImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PDFComics([
            'comics_name'=>$row[0],
            'comics_thumbnail'=>@$row[1],
            'comics_pdf_file'=>@$row[2],
            'language'=>@$row[3],
            'url_slug'=>@$row[4],
            'comics_category_id'=>@$row[5],
            'comics_subject_id'=>@$row[6],
            'subsubject'=>@$row[9],
            'comic_description'=>@$row[7],
            'comics_tags_for_search'=>@$row[8],
        ]);
    }
}
