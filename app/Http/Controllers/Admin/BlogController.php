<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        //$blogs =[];
        //return view('admin.pages.blog.index', compact('blogs'));
        return view('admin.pages.blog.index', ['blogs'=>$blogs]);
  
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $blog = new Blog();

        // $blog->title = $request->title;
        // $blog->content = $request->content;
        // $blog->save();

       try {
        DB::beginTransaction();
        Blog::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        DB::commit();
        return back()->with('success', 'Blog Yaradıldı.');
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', 'Blog Yaradılan Zaman Xəta Baş Verdi.');
       }
    
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.pages.blog.edit',['blog'=>$blog]);
    }

    public function editID($id)
    {
    
            // $blog=Blog::findOrFail($id);
            $blog=Blog::find($id);
            if(!$blog){
                return redirect()->route('admin.blog.index')->with('error', 'Blog Tapılmadı.');  
            }
        return view('admin.pages.blog.edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        try {
            DB::beginTransaction();
            $blog->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
            DB::commit();
            return back()->with('success', 'Blog Yeniləndi.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Blog Dəyişdirilən Zaman Xəta Baş Verdi.');
           }
    }

    public function updateID(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $blog = Blog::findOrFail($id);
            $blog->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
            DB::commit();
            return back()->with('success', 'Blog Yeniləndi.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Blog Dəyişdirilən Zaman Xəta Baş Verdi.');
           }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {
            DB::beginTransaction();
            $blog->delete();
            DB::commit();
            return back()->with('success', 'Blog Silindi.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Blog Silinən Zaman Xəta Baş Verdi.');
           }
    }

    public function destroyID($id)
    {
        try {
            $blog=Blog::findOrFail($id);
            DB::beginTransaction();
            $blog=Blog::find($id);
            if(!$blog){
                return back()->with('error', 'Blog Tapılmadı.');  
            }
            $blog->delete();
            DB::commit();
            return back()->with('success', 'Blog Silindi.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Blog Silinən Zaman Xəta Baş Verdi.');
           }
    }
    
}
