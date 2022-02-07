<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $filters = [];
        if($request->name) {
            $filters[] = ['name', 'LIKE', "%$request->name%"];
        }

        if($request->email) {
            $filters[] = ['email', 'LIKE', "%$request->email%"];
        }

        $listUsers = User::where($filters)->paginate(10);
        return view('backend.users', compact('listUsers'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return $user;
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return $user;
    }

    public function updateState(Request $request)
    {
        $user = User::find($request->id);
        $user->is_active = $request->is_active == 1 ? 0 : 1;
        $user->save();

        return $user;
    }
}
