<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() {
        return User::where('active', 1)
                    ->with('roles')
                    ->with('teams')
                    ->get();
    }

    public function getUsersInactive() {
        return User::where('active', 0)
                    ->get();
    }

    public function show($id) {
        return User::with('roles')->findOrFail($id);
    }

    public function store(Request $request) {
        $user = User::find($request->id);

        if(!empty($request->roles)) {
            foreach($request->roles as $rol) {
                $roles[] = $rol['id'];
            }
            $user->syncRoles($roles);
        }

        if(!empty($request->teams)) {
            foreach($request->teams as $team) {
                $teams[] = $team['id'];
            }
            $user->teams()->sync($teams);
        }

        $user->active = $request->active;
        $user->update();

        return $user;
    }
    public function update(Request $request) {
        return $request;
    }
}