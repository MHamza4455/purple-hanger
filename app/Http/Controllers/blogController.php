<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use File;
class blogController extends Controller
{
    public function blogAdd()
    {
        return view('blog-add');
    }
    public function blogStore(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'editordata' => 'required',
                'file'=> 'required',
                
            ]
        );

       $blogs = new Blog();
       $file = $request->file('file');
       $file->move(public_path()."/BlogImages/", $file->getClientOriginalName());
       $blogs->title = $request['title'];
       $text =  $request['editordata'];
       $blogs->description = $text;
       $blogs->thumbnail = "/BlogImages/".$file->getClientOriginalName();
       $blogs->save();
       return redirect()->back()->with('message', 'Blog data inserted Successfully.');

       
    }
    public function blogList()
    {
        $blogs = Blog::all();
        $data = compact('blogs');
        return view('blog-list')->with($data);
    }
    public function blogDelete($id)
    {
        $blogs = Blog::find($id)->delete();
        return redirect()->back();
    }
    public function blogEdit($id)
    {
        $blogs = Blog::find($id);
        $data = compact('blogs');
        return view('blog-update')->with($data);
    }
    public function blogUpdate(Request $request, $id)
    {
        $blogs = Blog::find($id);
        File::delete(public_path("/BannerImages/".$blogs->thumbnail));
        $file = $request->file('file');
        $file->move(public_path()."/BannerImages/", $file->getClientOriginalName());
        $blogs->title =  $request['title'];
        $blogs->description =  $request['editordata'];
        $blogs->thumbnail = "/BannerImages/".$file->getClientOriginalName();
        $blogs->save();
        return redirect('/admin/blogList')->with('message', 'Blog Data Updated Successfully.');
    }
}
