<?php

namespace App\Http\Controllers;

use App\MenuList;
use App\SubMenuList;
use Illuminate\Http\Request;

class SubMenuListController extends Controller
{
  public function index(Request $request) {
    $menu = MenuList::with('platillos')->whereId($request->idMenuList)->first();
    $platos = SubMenuList::where('id_menu_list',$request->idMenuList)->get();
    return view('backend.menu.list-menu.sub-menu-list.index', compact('menu','platos'));
  }

  public function create(Request $request) {
    $idMenuList = $request->idMenuList;
    return view('backend.menu.list-menu.sub-menu-list.create',compact('idMenuList'));
  }

  public function edit(Request $request, $id){
    $plato = SubMenuList::whereId($id)->first();
    $idMenuList = $request->idMenuList;
    return view('backend.menu.list-menu.sub-menu-list.edit', compact('idMenuList', 'plato'));
  }

  public function store(Request $request)
  {
    $subMenuList = new SubMenuList;
    $subMenuList->id_menu_list = $request->id_menu_list;
    $subMenuList->name = $request->name;
    $subMenuList->alert_message = $request->alert_message;
    $subMenuList->price = $request->price;
    $subMenuList->description = $request->description;
    $subMenuList->save();

    $idMenuList = $request->id_menu_list;

    return redirect()->route('sub-menu-list.index', ['idMenuList' => $idMenuList])->with('created', 'Registro creado exitosamane.');
  }

  public function update(Request $request, $id)
  {
    $subMenuList = SubMenuList::find($id);
    $subMenuList->id_menu_list = $request->id_menu_list;
    $subMenuList->name = $request->name;
    $subMenuList->alert_message = $request->alert_message;
    $subMenuList->price = $request->price;
    $subMenuList->description = $request->description;
    $subMenuList->save();
    $idMenuList = $request->id_menu_list;

    return redirect()->route('sub-menu-list.index', ['idMenuList' => $idMenuList])->with('updated', 'Registro actualizado exitosamane.');
  }

  public function updateIsActive(Request $request, $id)
  {
    $newState = $request->state == '1' ? 0 : 1;
    $subMenuList = SubMenuList::find($id);
    $subMenuList->is_active = $newState;
    $subMenuList->save();
    return redirect()->route('sub-menu-list.index', ['idMenuList' => $request->idMenuList]);
  }

}
