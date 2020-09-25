<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index () {
        $admin = \Auth::user()->id;

        $users = User::query()->where('id', '<>', $admin)->get();

        return view('admin.users', [
            'route' => '/admin',
            'users' => $users
        ]);
    }

    public function update (User $user) {
        if ($user->is_admin) {
            $user->is_admin = 0;
        } else {
            $user->is_admin = 1;
        }

        $user->save();

        return redirect()->route('users');
    }
}
