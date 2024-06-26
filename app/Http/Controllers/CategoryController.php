<?php

namespace App\Http\Controllers;

use App\DataTables\CategoriesDataTable;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render('scaffolds.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scaffolds.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        
        // dd($validator->errors());

        if ($validator->fails()) {
            toast('Something went wrong!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Category::create(['name' => $request->name]);

            toast('Data created successfully!', 'success');
            return redirect()->route('categories.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $data = $category;

        return view('scaffolds.categories.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data = $category;

        return view('scaffolds.categories.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            toast('Something went wrong!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $category->update(['name' => $request->name]);

            toast('Data updated successfully!', 'success');
            return redirect()->route('categories.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        toast('Data deleted successfully!', 'success');
        return redirect()->route('categories.index');
    }
}
