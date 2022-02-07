<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MenuList;
use App\SubMenuList;
use Illuminate\Http\Request;

class Menu2Controlle extends Controller
{
  public function index()
  {
    $menu = Menu::first();
    $menuList = MenuList::with('platillos')->where('is_active',1)->get();
    // $subMenuList = SubMenuList::where('is_active',1)->get();
    return view('frontend.menu2', compact('menu','menuList'));
  }

  public function pageMenu()
  {
    $menu = Menu::first();
    return view('backend.menu.index', compact('menu'));
  }

  public function pageMenuEdit(Request $request)
  {
    $menu = Menu::whereId($request->id)->first();
    return view('backend.menu.edit', compact('menu'));
  }
  public function pageMenuUpdate(Request $request)
  {
    $menu = Menu::find($request->id);
    $menu->header_title = $request->mtitle;
    $menu->header_description = $request->mdescription;

    $menu->save();
    return redirect()->route('page-menu')->withSuccess('Actualizado correctamente', 'Actualizado correctamente.');
  }
}
