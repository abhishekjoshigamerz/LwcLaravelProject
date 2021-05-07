<?php

namespace App\Http\Controllers\TalkingComicsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TalkingComicsModel\TalkingComicsModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TalkingComicsImport;
use DB;
class TalkingComicsController extends Controller
{
    public function index(){
        $record = TalkingComicsModel::paginate(50);
        return view('adminpanel/talkingcomics/index',compact('record'));
    }

    public function store(Request $request){
        Excel::import(new TalkingComicsImport, $request->file('select_file'));
        return redirect('adminpanel/talkingcomics')->with('success', 'All good!');
    }

    public function destroy($id){
        DB::table('talking_comics_models')->where('talking_comics_models_id',$id)->delete();
        return redirect('adminpanel/talkingcomics')->with('success', 'All good!');
    }

    public function showfront(){
        return view('frontendview.talking.showfront');
    }


}
