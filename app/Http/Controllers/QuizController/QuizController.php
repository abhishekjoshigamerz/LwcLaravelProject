<?php

namespace App\Http\Controllers\QuizController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuizModel\QuizModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Quiz;
use DB;
class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = QuizModel::paginate(50);

        return view('adminpanel/quiz/index',compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Excel::import(new Quiz, $request->file('select_file'));
        return redirect('adminpanel/quiz')->with('success', 'All good!');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('quiz_models')->where('quiz_id',$id)->delete();
        return redirect('adminpanel/quiz')->with('success', 'All good!');
    }

    public function getsubject($class){
        $record = DB::table('quiz_models')->distinct()->where('quiz_class_url',$class)->pluck('quiz_subject_url');
        return response()->json($record);
    }

    public function showfront(){
        $record = DB::table('quiz_models')->distinct()->pluck('quiz_class_url');
        return view('frontendview/quiz/index',compact('record'));
    }

    public function showlanguage($class,$subject){
        $language=DB::table('quiz_models')->distinct()->where('quiz_subject_url',$subject)->where('quiz_class_url',$class)->pluck("language");
        return response()->json($language);
    }

    public function showlessons($class,$subject,$language){
        $lesson=DB::table('quiz_models')->distinct()->where('quiz_subject_url',$subject)->where('language',$language)->where('quiz_class_url',$class)->pluck("quiz_subsubject_url");
        return response()->json($lesson);
    }

    public function showquiz($class,$subject,$language,$lesson){
        $record = DB::table('quiz_models')->where('quiz_subject_url',$subject)->where('language',$language)->where('quiz_subsubject_url',$lesson)->where('quiz_class_url',$class)->get();
        return view('frontendview/quiz/showquiz',compact('record'));
    }
}
