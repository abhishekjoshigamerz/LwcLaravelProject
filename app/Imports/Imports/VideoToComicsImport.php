<?php

namespace App\Imports\Imports;

use App\Model\VideoToComics\VideoToComics;
use Maatwebsite\Excel\Concerns\ToModel;

class VideoToComicsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VideoToComics([
            'comicstovideo_name'=>$row[0],
            'comicstovideo_thumbnail'=>@$row[1],
            'comicstovideo_pdf_file'=>@$row[2],
            'languagetovideo'=>@$row[3],
            'url_slug'=>@$row[4],
            'class_slug'=>@$row[5],
            'subject_url'=>@$row[6],
            
            'comictovideo_description'=>@$row[8],
            'comicstovideo_tags_for_search'=>@$ow[9],
            'video_to_comics_iframe_code'=>@$row[10],     
            'subsubject'=>@$row[7],   
        ]);
    }
}
