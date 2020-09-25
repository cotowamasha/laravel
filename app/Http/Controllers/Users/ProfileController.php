<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProfileController extends Controller
{
    protected $success = '';

    public function update (Request $request) {
        $user = Auth::user();

        $this->success = '';

        if ($request->isMethod('post')) {
            $this->change($request);
        }
        return view('users.profile', [
            'route' => '/profile',
            'user' => $user,
            'success' => $this->success
        ]);
    }

    protected function validateRules () {
        return [
            'name' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,'.Auth::id(),
            'password' => 'required',
            'password_new' => 'required|string|min:3'
        ];
    }

    protected function change ($request) {
        $user = Auth::user();

        $this->validate($request, $this->validateRules());

        if (Hash::check($request->post('password'), $user->password)) {

            $user->fill([
                'name' => $request->post('name'),
                'password' => Hash::make($request->post('password_new')),
                'email' => $request->post('email')
            ]);

            $user->save();

            $this->success = 'Your profile updated';
            return view('users.profile', [
                'route' => '/profile',
                'user' => $user,
                'success' => $this->success
            ]);

        } else {
            $this->success = '';
            return view('users.profile', [
                'route' => '/profile',
                'user' => $user,
                'success' => $this->success
            ]);
        }
    }
}
