<?php

namespace App\Http\Controllers\ClassController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category\Category;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Category::simplePaginate(10);

        return view('adminpanel.class',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.addclass');
    }

    
    public function store(Request $request)
    {
        $data = new Category;
        $data->class_name= $request->classname;
        $slug = str_slug($request->classname);
        $data->class_slug = $slug;

        $data->save();

        return redirect('/adminpanel/class')->with('status','Your new class has been added');
    }

    public function destroy($id)
    {
        $delete = Category::where('category_id',$id)->delete();
        return redirect('/adminpanel/class')->with('status','Your  class has been deleted');
    }
}
