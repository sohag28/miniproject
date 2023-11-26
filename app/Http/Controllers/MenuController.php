<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::all();
        return view('admin.menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new Menu();

        $data->menuType = $request->menuType;
        $data->menuName = $request->menuName;

        $data->save();

        $msg = "Successfuly Inserted!";

        return redirect()->route('menus.index');


        
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
    public function edit(string $id)
    {
        $data = Menu::findOrFail($id);
        $menus = Menu::all();
        return view('admin.menu.edit', compact('data', 'menus'));
    }

    // public function editCategory($id){

    //     $category = Category::findOrFail($id);
    //     return view('backend.category.edit_category',compact('category'));
    // }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Menu::findOrFail($id)->update([
            'menuType' => $request->menuType,
            'menuName' => $request->menuName
        ]);

        // $msg = "Successfuly updated!";

        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        
        $id->delete();

        return redirect()->route('menus');

    }


}
