<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests\CreateUserRequest;

use App\Http\Requests\UpdateUserPasswordRequest;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index() {
        return view('users.index')->with('users', User::all());
    }

    public function makeAdmin(User $user) {
        $user->role = 'admin';

        $user->save();


        session()->flash('success', 'User made ADMIN successfully');

        return redirect(route('users.index'));
    }

    public function destroy($user)
    {
        $users = User::findOrFail($user);

        $users->delete();

        session()->flash('success', 'User deleted successfully');

        return redirect(route('users.index'));
    }

    // public function create() {
    //     return view('users.create');
    // }

    // public function store(CreateUserRequest $request) {

    //     $data = $request->only(['name', 'email', 'password']);

    //     User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);

    //     session()->flash('success', 'User added successfully');

    //     return redirect(route('users.index'));
    // }

    public function edit(User $user) {

        return view('users.edit')->with('user', $user);

    }

    public function update(UpdateUserPasswordRequest $request, $user) {

        // $user->password = Hash::make($request->password);

        // $user->save();

        $users = User::findOrFail($user);

        $newPass = Hash::make($request->password);
        
        $users->password = $newPass;

        $users->save();

        session()->flash('success', 'Password updated successfully');

        return redirect(route('users.index'));

    }
}
