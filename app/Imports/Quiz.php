<?php

namespace App\Imports;

use App\QuizModel\QuizModel;
use Maatwebsite\Excel\Concerns\ToModel;

class Quiz implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new QuizModel([
            'quiz_name' => $row[0],
            'quiz_class_url' => $row[1],
            'quiz_subject_url' => $row[2],
            'quiz_subsubject_url' => $row[3],
            'quizthumbnail_link' => $row[4],
            'quiz_link' => $row[5],
            'language' => $row[6]
        ]);
    }
}
