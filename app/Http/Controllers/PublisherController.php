<?php

namespace App\Http\Controllers;

use App\DataTables\PublishersDataTable;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PublishersDataTable $dataTable)
    {
        return $dataTable->render('scaffolds.publishers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scaffolds.publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            toast('Something went wrong!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Publisher::create([
                'name' => $request->name,
                'desc' => $request->desc ?? null
            ]);

            toast('Data created successfully!', 'success');
            return redirect()->route('publishers.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        $data = $publisher;

        return view('scaffolds.publishers.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        $data = $publisher;

        return view('scaffolds.publishers.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            toast('Something went wrong!', 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $publisher->update([
                'name' => $request->name,
                'desc' => $request->desc
            ]);

            toast('Data updated successfully!', 'success');
            return redirect()->route('publishers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        toast('Data deleted successfully!', 'error');
        return redirect()->route('publishers.index');
    }
}
