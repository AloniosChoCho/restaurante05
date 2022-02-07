<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuList;
use App\MenuList;
use App\SubMenuList;
use Illuminate\Http\Request;

class MenuListController extends Controller
{

  public function index(Request $request) {
    // MODELO VINCULA CON LA BASE DE DATOS
    $menuList = MenuList::get(); // LISTA
    $encabezado = SubMenuList::where('id_menu_list',$request->idMenulist)->get();
    return view('backend.menu.list-menu.index', compact('menuList','encabezado'));
    // dd($request->idMenulist);
  }

  public function create() {

    return view('backend.menu.list-menu.create');
  }

  public function store(StoreMenuList $request)
  {
    $menuList = new MenuList;
    $menuList->title_list = $request->title_list;
    $menuList->description_list = $request->description_list;
    $menuList->save();

    return redirect()->route('menu-list.index')->with('created', 'Registro creado exitosamane.');
  }

  public function edit(Request $request, $id) {
    $menuList = MenuList::whereId($id)->first();
    $idMenuList = $request->idMenuList;
    // dd($idMenuList);
    return view('backend.menu.list-menu.edit',compact('idMenuList' , 'menuList'));
  }

  public function update(Request $request, $id)
  {
    $menuList = MenuList::find($id);
    $menuList->title_list =$request->title_list;
    $menuList->description_list = $request->description_list;
    $menuList->save();

    return redirect()->route('menu-list.index', ['idMenuList' => $request->idMenuList])->with('updated', 'Registro actualizado exitosamane.');
  }

  public function updateIsActive(Request $request, $id)
  {
    $newState = $request->state == '1' ? 0 : 1;
    $MenuList = MenuList::find($id);
    $MenuList->is_active = $newState;
    $MenuList->save();
    return redirect()->route('menu-list.index', ['idMenuList' => $request->idMenuList]);
  }
}
