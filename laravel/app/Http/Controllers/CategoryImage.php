<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class CategoryImage extends Controller
{
    public function index(){
        $image = Images::all();
        
        return view('displayImages', compact('image'));
    }

    
    public function store(Request $request){
        $image = new Images;
        $image->category_id = $request->input('category_id');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/categoryImages/', $filename);
            $image->image = $filename;
        }
        $image->save();
        return redirect()->back();
    
    }

}
