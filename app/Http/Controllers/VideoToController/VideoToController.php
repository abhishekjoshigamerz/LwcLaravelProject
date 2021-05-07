<?php

namespace App\Http\Controllers\VideoToController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VideoToComics\VideoToComics;
use DB;
class VideoToController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = VideoToComics::paginate(30);

        return view('adminpanel.showvideotocomics',compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.addvideotocomics');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = VideoToComics::where('video_to_comics_id',$id)->first();
        
        return view('adminpanel.editvideocomics',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->pdfID; 
        echo $request->language;
        VideoToComics::where('video_to_comics_id',$id)->update([
            'comicstovideo_name'=>$request->comicsname,
            
            'comictovideo_description'=>$request->comics_description,
            'comicstovideo_tags_for_search'=>$request->comicstag,
            'video_to_comics_iframe_code'=>$request->video_to_comics_iframe_code
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
      
       

        return redirect('adminpanel/v2c');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('video_to_comics')->where('video_to_comics_id',$id)->delete();
        return redirect()->back()->with('message','Successfully Delete Your Multiple Selected Records.');
    }

    public function massdelete(Request $request){
        $i=$request->id;
        
        foreach($i as $key){
            DB::table('video_to_comics')->where('video_to_comics_id',$key)->delete();
        }

        return redirect()->back()->with('message','Successfully Delete Your Multiple Selected Records.');
    }
}
