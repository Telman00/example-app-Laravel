<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\BlogStoreRequest;
use App\Models\Blog;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::whereHas('category')->with(['category','user'])->orderBy('id','DESC')->paginate(25);
        
        return view('admin.pages.blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.blog.create',['categories' => $categories]);
    }

    public function store(BlogStoreRequest $request)
    {

        $request = $request->validated();
        
        if(isset($request['file'])){
            $fileName = (string) Str::uuid() . '.webp';
            $request['file']->storeAs('public/' . 'blog', $fileName);
            $request['image'] ='blog/'.$fileName;
        }
       try {
            DB::beginTransaction();
            Blog::create($request);
            DB::commit();
            return back()->with('success', 'Blog Yaradildi ');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return back()->with('errors', 'Blog Yaradilan Zaman Xeta Bas Verdi ');
        }
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.pages.blog.edit', ['blog' => $blog,'categories' => $categories]);    
    }

    public function update(BlogStoreRequest $request, Blog $blog)
    {

        if ($request->hasFile('file')) {
            $fileName = (string) Str::uuid() . '.webp';
            $request->file('file')->storeAs('public/blog', $fileName);
            $validatedData['image'] = 'blog/' . $fileName;

            File::delete('storage/'.$blog->image);
           
        }
        try {
            DB::beginTransaction();
            $blog->update($request);
            DB::commit();
            return back()->with('success', 'Blog Deyisdirildi ');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('errors', 'Blog Deyisdirilen Zaman Xeta Bas Verdi ');
        }
    }


    public function destroy(Blog $blog)
    {

        try {
            DB::beginTransaction();
            if(!is_null($blog->image)){
                File::delete('storage/'.$blog->image);
            }
            $blog->delete();
            DB::commit();
            return back()->with('success', 'Blog Silindi ');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('errors', 'Blog Silinen Zaman Xeta Bas Verdi ');
        } 
    }
}
