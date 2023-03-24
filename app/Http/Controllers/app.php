<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\menuType;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class app extends Controller
{
    function index() {
        return view('app');
    }

    function beranda() {
        $listMenu = menu::with('menutype')->paginate(5);
        $menuCount = menu::count();
        return view('beranda', compact('listMenu', 'menuCount'));
    }

    function addMenu() {
        return view('addMenu');
    }
    
    function addMenuSuccess(Request $request) {
        // dd($request->all());
        menu::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('beranda');
    }

    function editMenu($id) {
        $menu = menu::where('id', $id)->first();
        return view('editMenu', compact('menu'));
    }

    function updateMenu(Request $request, $id) {
        $menu = menu::where('id', $id)->first();
        $menu->update($request->all());
        return redirect('beranda');
    }

    function deleteMenu($id) {
        $menu = menu::where('id', $id)->first();
        $menu->delete();
        return back();
    }
}
