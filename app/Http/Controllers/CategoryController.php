<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdatCategory;
Use Alert;

class CategoryController extends Controller
{
    private $categoryservice;
    private $model = 'Category';

    public function __construct(CategoryService $service)
    {
        $this->categoryservice = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.filter',[
            'categories'=>$categories

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = New category;
        $name = 'New';
        return view('dashboard.categories.create',[
            'category'=>$category,
            'name' => $name 
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $data = $request->all();
        $category = $this->categoryservice->store($data);
        // Alert::success('Success Title', 'STD Clinic was created successfully!');
        return redirect()->route('category.show', [ $category->id])->with('success', 'Category created was created successfully!');
  
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $name = $category->name;
        return view('dashboard.categories.view', [
            'category'=>$category,
            'name' => $name 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $name = $category->name;
        return view('dashboard.categories.edit', [
            'category'=>$category,
            'name' => $name 
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, Category $category)
    {
        $data = $request->all();
        $shouldUpdate = $this->categoryservice->shouldUpdate( $category, $data );
        if ($shouldUpdate){
            $this->categoryservice->update( $category, $data );
            // Alert::success('Success Title', 'Subpopulation was updated successfully!');
        }
        return redirect()->route('category.show', ['subpopulation' => $category])->with('success', 'Subpopulation was updated successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
