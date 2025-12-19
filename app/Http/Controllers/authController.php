<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    // Register Controls
    public function showRegister()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
        ]);

        authUser::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // FIXED
            'phone' => $request->phone,
        ]);

        return redirect("/login")->with('success', 'Registration successful!');
    }

    // Login Controls
    public function showLogin()
    {
        return view("auth.login");
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route("dashboard");
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route("login");
    }

    public function showUsers()
    {
        $users = authUser::all();
        return view("auth.showusers", compact('users'));
    }

    public function update($id)
    {
        $user_id = authUser::findOrFail($id);
        return view("auth.update", compact('user_id'));
    }
    public function doUpdate(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $user_id = authUser::findOrFail($id);

        $user_id->username = $request->username;
        $user_id->email = $request->email;
        $user_id->password = $request->password;
        $user_id->phone = $request->phone;

        if ($request->filled('password')) {
            $user_id->password = Hash::make($request->password);
        }

        $user_id->save();

        return redirect()->route('showusers')->with('success', 'user updated successfully');

    }

    public function delete($id)
    {
        $user = authUser::findOrFail($id);
        $user->delete();

        return redirect()->route('showusers')->with('success', 'user is deleted');

    }
}
