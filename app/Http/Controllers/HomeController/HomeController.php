<?php

namespace App\Http\Controllers\HomeController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comics\Comics;
use App\Model\Category\Category;
use App\Model\Subject\Subject;
use App\Model\PDFComics\PDFComics;
use App\Model\VideoToComics\VideoToComics;
use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function class(){
        $records = Category::all();

        return view('frontendview.class',compact('records'));
    }
    public function studentresources(){
        $category = Category::all();
        $popup = 1;
        return view('frontendview.studentresource',compact('category','popup'));
    }

    public function teacherresources()
    {
        $category = Category::all();
        $popup = 1;
        return view('frontendview.teacherresource',compact('category','popup'));
    }
     
    public function index()
    {
        $category = Category::all();
        $records = Comics::all();
        $popup = 1;

        $classes = Category::with('subjects')->get();
       
        
        $pdfcomics = PDFComics::orderBy('pdfcomics_id','DESC')->limit(9)->get();
        return view('frontendview/index',compact('popup','records','category','pdfcomics','classes'));
    }
    
    public function video2comics(){
          $category = Category::all();
           $popup = 1;
          return view('frontendview/class6video',compact('category','popup'));
    }
    
    public function lawsofreflection(){
         $category = Category::all();
           $popup = 1;
            return view('frontendview/class6video2',compact('category','popup')); 
    }

    public function about(){
        $category = Category::all();
        $popup =0;
        return view('frontendview/about',compact('category','popup'));
    }

    public function languageresult($class){

        if($class=="class-5"){
           
            return redirect('classes/class5');
        }else{
        $c = "class";
        $category = Category::all();
        $cat = Category::where('class_slug',$class)->first();
        $popup = 0;
        $sub2 = Subject::where('class_subject_id',$cat->category_id)->get();
        $data = compact('popup','class','category','cat','sub2','c');
        return view('frontendview.languageresult',$data);
        }
    }

    public function class5pdf(){
        $subject = Subject::where('class_subject_id',12)->get();
        return view('frontendview.class5.subject',compact('subject'));
    }
    public function class5pdflanguage($subject){
       
    }

    public function videotoc(){
        $records = Category::all();
        return view('frontendview.videot',compact('records'));
    }

    public function viewpdf($pdfslug){
        $category = Category::all();
        $popup = 0;
        $record = PDFComics::where('url_slug',$pdfslug)->first();
        return view('frontendview.readcomicpdfpage',compact('popup','record','category'));
    }
    
    public function comicscollection (Request $request, $class,$subject,$language,$subsubject){
        $cat = Category::where('class_slug',$class)->first();
        $popup = 0;
        $category = Category::all();

        $subject2 = Subject::where('subject_url',$subject)->where('class_subject_id',$cat->category_id)->first();

        $data = PDFComics::where('comics_subject_id',$subject2->subject_id)
                          ->where('comics_category_id',$cat->category_id)
                          ->where('subsubject',$subsubject)
                          ->where('language',$language)->orderBy('pdfcomics_id','DESC')
                          ->get();           
        $data = compact('popup','class','subject','subject2','language','data','category','cat');
       
        return view('frontendview.comicscollections',$data);
    }
    public function comicscollection2 ($subject,$language){
       
        $popup = 0;
        $category = Category::all();
       
        $subject2 = Subject::where('subject_url',$subject)->where('class_subject_id',12)->first();

        $data = PDFComics::where('comics_subject_id',$subject2->subject_id)
                          ->where('comics_category_id',12)
                          ->where('language',$language)->orderBy('pdfcomics_id','DESC')
                          ->get();           
        $data = compact('popup','subject','subject2','language','data','category');
       
        return view('frontendview.comicscollections',$data);
    }

    public function readcomicpage(Request $request,$comictitle){
        $category = Category::all();
        $popup = 0;
        $query = Comics::where('url_slug',$comictitle)->first();
        $mobile = 1;
        return view('frontendview.readcomicpage',compact('popup','query','category','mobile'));
    }

    public function downloadcomics(){
        $category = Category::all();
        $popup = 0;
        return view('frontendview.downloadcomics',compact('popup','category'));
    }

    public function contactus(Request $request){
        $category = Category::all();
        $popup = 0;
        return view('frontendview.contactus',compact('popup','category'));
    }

    public function buildinpublic(){
        $popup = 0;
        $category = Category::all();
        return view('frontendview.buildinpublic',compact('popup','category'));
    }

    public function searchresult(Request $request){
        $popup = 0;
        $category = Category::all();
        $tag = $request->search;
        $query = PDFComics::where('comics_tags_for_search','LIKE','%'.$tag.'%')
        ->get();
       
        return view('frontendview.searchresult',compact('popup','query','tag','category'));
    }

    public function sendmessage(Request $request){
        $popup = 0;
        return redirect('/contactus')->with('success','We will contact you back!');
    }

    public function videotocomics(Request $request,$class){
        $popup = 0;
        $category = Category::all();
        $subject = Subject::all();
        $c = $class;
        if($c==''){
            $records = VideoToComics::where('class_slug',$c)->get();
        }else{
            $records = VideoToComics::where('class_slug',$class)->get();
        }
        
        return view('frontendview.videotocomics',compact('popup','category','subject','class'));
    }
    public function videotocomics2(Request $request,$class,$subject,$language,$subsubject){
        $popup = 0;
        $category = Category::all();
        $subject2 = Subject::all();
        $c =$class;
        $data = VideoToComics::where('class_slug',$class)->where('languagetovideo',$language)->where('subsubject',$subsubject)->get();
        
        
        return view('frontendview.videotocomics2',compact('popup','category','data','c','subject2','class'));
    }

    public function showvideotocomics($class,$url){
        $popup = 0;
        $category = Category::all();
        $record = VideoToComics::where('url_slug',$url)->first();

        
        return view('frontendview.showvideotocomics',compact('popup','category','record'));
    }

    public function likeadder($id){
        $comics = PDFComics::where('pdfcomics_id',$id)->first();
        $likes = $comics->likecounter;
      
        $like = $likes + 1;
         $record = PDFComics::where('pdfcomics_id',$id)->update(['likecounter' => $like]);
     
        if($record){
            return redirect()->back()->withErrors(['Thank you for your feedback. It means a lot to us. Please check our other comics too.']);;
        }else{
            
        }
      
      

    }
    public function likeaddervideotocomics($id){
        $comics = VideoToComics::where('video_to_comics_id',$id)->first();
        $likes = $comics->likecounter;
      
        $like = $likes + 1;
         $record = VideoToComics::where('video_to_comics_id',$id)->update(['likecounter' => $like]);
     
        if($record){
            return redirect()->back()->withErrors(['Thank you for your feedback. It means a lot to us. Please check our other comics too.']);;
        }else{
            
        }
    }

    public function team(){
        return view('frontendview.team');
    }
    
    
}
