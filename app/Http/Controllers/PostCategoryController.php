<?php

namespace App\Http\Controllers;

use App\Models\post_categories;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postcategorydata = post_categories::all();
        return view("admin.postcategory.index", compact("postcategorydata"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.postcategory.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createData = new post_categories();
        $createData->post_category_name = $request->post_category_name;
        $createData->description = $request->description;
        $createData->status = $request->status;

        $createData->save();
        return redirect()->route("postC.index");
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
    public function edit($post_category_id)
    {
        $postcategorydata = post_categories::find($post_category_id);
        return view("admin.postcategory.edit", compact("postcategorydata"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postcategories = post_categories::find($id);
        $postcategories->post_category_name = $request->post_category_name;
        $postcategories->description = $request->description;
        $postcategories->status = $request->status;
        $postcategories->save();
        return redirect()->route('postC.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = post_categories::find($id);
        $destroy->delete();
        return response()->json(['success' => true, 'message' => 'Xóa danh mục thành công']);
    }
}
