<?php

namespace App\Http\Controllers\SubjectController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Category\Category;
use App\Model\Subject\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Subject::paginate(25);
        
        
        return view('adminpanel.showsubject',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('adminpanel.addsubject',compact('category'));
    }

    public function store(Request $request)
    {
       $data = new Subject;
       $data->class_subject_id = $request->class;
       $data->subject_name = $request->subjectname;
       $file = $request->file('thumbnail');
       $subjecturl = str_slug($request->subjectname);
       $data->subject_url = $subjecturl;
       $destinationPath = 'uploads/subjects/';
       $data->cover_image_url = $file->getClientOriginalName();
       $file->move($destinationPath,$file->getClientOriginalName()); 
       $data->save();
       return redirect('adminpanel/subject')->with('status','Your Subject of Respective class has been added!');
    }

    
    public function destroy($id)
    {
        $delete = Subject::where('subject_id',$id)->delete();
        return redirect('adminpanel/subject')->with('status','Your  class has been deleted');
    }
}
