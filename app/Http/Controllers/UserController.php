<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view users')->only('index', 'show');
        $this->middleware('permission:create users')->only('create', 'store');
        $this->middleware('permission:edit users')->only('edit', 'update');
        $this->middleware('permission:delete users')->only('destroy');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Other CRUD methods...

    public function assignRole(Request $request, User $user)
    {
        if (!$request->user() || !$request->user()->hasPermissionTo('edit users')) {
            abort(403);
        }
        
        $request->validate([
            'role' => 'required|exists:roles,name',
        ]);

        $user->syncRoles($request->role);

        return redirect()->back()->with('success', 'Role assigned successfully');
    }
} 