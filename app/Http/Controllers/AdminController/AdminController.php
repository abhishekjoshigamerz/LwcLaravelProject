<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Comics\Comics;
use App\Model\Category\Category;
use App\Model\Subject\Subject;
use App\Model\PDFComics\PDFComics;
use DB;
use Imagick;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpanel/index');
    }

    public function showcomics(){
        $record = Comics::paginate(15);
       
        return view('adminpanel/showcomics',compact('record'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcomics()
    {
        $records = Category::all();

        return view('adminpanel.addcomics',compact('records'));
    }
    
    public function viewcomics(){
        $record = PDFComics::paginate(30);
       
        return view('adminpanel/viewpdfcomics',compact('record'));
    }
    
      public function pdfdestroy($id)
    {
         PDFComics::where('pdfcomics_id',$id)->delete();
        

        return redirect('adminpanel/viewpdfcomics');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $urlstring = str_slug($request->comicsname); 
       $Model  = new Comics;
       $Model->comics_name = $request->comicsname;
       $file = $request->file('thumbnail');
       $Model->url_slug = $urlstring;
       $Model->comics_thumbnail = $file->getClientOriginalName();
       $Model->comics_tags_for_search = $request->comicstag;
       $Model->language = $request->language;
       $Model->comics_category_id = $request->class;
       $Model->comics_subject_id = $request->subject;
       $Model->comic_link_flapbook = $request->flipbooklink; 
       $Model->comic_description=$request->comics_description; 

        
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

    
      $Model->save();

       return redirect('adminpanel/comics');
    }

    public function editpdfcomics($id){
        $data = PDFComics::where('pdfcomics_id',$id)->first();
        $subject = Subject::pluck('subject_id','subject_name');
        $class = Category::all();
        
        return view('adminpanel.editpdf',compact('data','subject','class'));
    }

    public function editpdfcomicstore(Request $request){
       
        $id= $request->pdfID; 
        echo $request->language;
        PDFComics::where('pdfcomics_id',$id)->update([
            'comics_name'=>$request->comicsname,
            'language'=>$request->language,
            'comics_category_id'=>$request->class,
            'comics_subject_id'=>$request->subject,
            'comic_description'=>$request->comics_description,
            'comics_tags_for_search'=>$request->comicstag
        ]);
       
        if($request->pdfthumbnail!=''&&!empty($request->pdfthumbnail)){
          
            $pdffile = $request->file('pdfthumbnail');
            $pdffilename = str_replace(' ','',$pdffile->getClientOriginalName());
            
            $destinationPath = 'uploads/pdfcomics';
            $pdffile->move($destinationPath,$pdffile->getClientOriginalName());
        }

        if($request->thumbnail!=''&&!empty($request->thumbnail)){
            $file = $request->file('thumbnail');
           $file2= $file->getClientOriginalName();
            $destinationpic = "uploads/";
            $file->move($destinationpic,$file2->getClientOriginalName());
        }
      
       

        return redirect('adminpanel/viewpdfcomics');
    }

    public function multipledelete(Request $request){
        $i = $request->id;
        foreach($i as $key){
            DB::table('p_d_f_comics')->where('pdfcomics_id',$key)->delete();
        }
        return redirect()->back()->with('message','Successfully Delete Your Multiple Selected Records.');
    }
    
    public function myformAjax($id){
        
        $subjects = Subject::where("class_subject_id",$id)->pluck('subject_id','subject_name');
       
        return json_encode($subjects);
    }
    

    public function uploadpdf(){
        $records = Category::all();

        return view('adminpanel.addpdf',compact('records'));
    }
   
    public function createpdf(Request $request){
        $urlstring = str_slug($request->comicsname); 
        $Model  = new PDFComics;
        $Model->comics_name = $request->comicsname;
        $file = $request->file('thumbnail');
        $pdffile = $request->file('pdfthumbnail');
        $Model->url_slug = $urlstring;
        $Model->comics_thumbnail = $file->getClientOriginalName();
        $Model->comics_tags_for_search = $request->comicstag;
        $pdffilename = str_replace(' ','',$pdffile->getClientOriginalName());
        $Model->comics_pdf_file = $pdffilename;
        $Model->language = $request->language;
        $Model->comics_category_id = $request->class;
        $Model->comics_subject_id = $request->subject;
        $Model->comic_description=$request->comics_description; 
 
         $destinationpic = "uploads/";
         $destinationPath = 'uploads/pdfcomics';
         $file->move($destinationpic,$file->getClientOriginalName());
         $pdffile->move($destinationPath,$pdffile->getClientOriginalName());
 
     
       $Model->save();
 
        return redirect('adminpanel/viewpdfcomics');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Comics::where('comics_id',$id)->delete();
        

        return redirect('adminpanel/comics');
    }

    public function convertfiletoHtml(){
        
    }
}
