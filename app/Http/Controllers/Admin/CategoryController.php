<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('adminId', ['only' => ['create']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // auth()->logout();
        $categories = Category::withCount('blogs')->paginate(10);

        return view('admin.pages.category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $request = $request->validated();

       try {
            DB::beginTransaction();
            Category::create($request);
            DB::commit();
            return back()->with('success', 'Category Yaradildi ');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('errors', 'Category Yaradilan Zaman Xeta Bas Verdi ');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.pages.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $request = $request->validated();
      
        try {
            DB::beginTransaction();
            $category->update($request);
            DB::commit();
            return back()->with('success', 'Category Deyisdirildi ');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('errors', 'Category Deyisdirilen Zaman Xeta Bas Verdi ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();
            $category->delete();
            DB::commit();
            return back()->with('success', 'Category Silindi ');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('errors', 'Category Silinen Zaman Xeta Bas Verdi ');
        }
    }
}
