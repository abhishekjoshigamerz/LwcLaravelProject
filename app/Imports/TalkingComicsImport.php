<?php

namespace App\Imports;

use App\TalkingComicsModel\TalkingComicsModel;
use Maatwebsite\Excel\Concerns\ToModel;

class TalkingComicsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TalkingComicsModel([
            'talkcomics_name' => $row[0],
            'talkcomics_class_url' => $row[1],
            'talkcomics_subject_url' => $row[2],
            'talkcomics_subsubject_url' => $row[3],
            'talkcomicsthumbnail_link' => $row[4],
            'talkcomics_link' => $row[5],
            'language' => $row[6]
        ]);
    }
}
