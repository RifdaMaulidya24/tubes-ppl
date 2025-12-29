<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'profile_photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,webp', 'max:2048'],
        ]);

        // update data basic
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // upload photo (DISK PUBLIC)
        if ($request->hasFile('profile_photo')) {
            // hapus foto lama kalau ada
            if ($user->profile_photo_path && Storage::disk('public')->exists($user->profile_photo_path)) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $user->profile_photo_path = $path;
        }

        $user->save();

        return back()->with('status', 'profile-updated');
    }

    public function destroy(Request $request)
    {
        // biarin sesuai punyamu (kalau sudah ada)
        // ini placeholder supaya file lengkap
        return back();
    }
}
