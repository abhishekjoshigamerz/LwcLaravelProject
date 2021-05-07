<?php

namespace App\Http\Controllers\ImportController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\PDFImports;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Imports\VideoToComicsImport;
class ImportController extends Controller
{
    public function index(){
        return view('adminpanel.importexcel');
    }

    public function import(Request $request){
        
        Excel::import(new PDFImports, $request->file('select_file'));
        return redirect('/adminpanel/viewpdfcomics')->with('success', 'All good!');
    }

    public function importvideoToComics(Request $request){
        Excel::import(new VideoToComicsImport, $request->file('select_file'));
        return redirect('/adminpanel/v2c')->with('success', 'All good!');
    }
}
