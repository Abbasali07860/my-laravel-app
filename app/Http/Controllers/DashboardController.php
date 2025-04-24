<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalUsers = User::count();
        return view('dashboard', compact('user', 'totalUsers'));
    }
    
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('image')) {
            if ($user->image && Storage::disk('public')->exists('profile_images/' . $user->image)) {
                Storage::disk('public')->delete('profile_images/' . $user->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('profile_images', $imageName, 'public');
            $user->image = $imageName;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }
    
}

