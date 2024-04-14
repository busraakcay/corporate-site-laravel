<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.profile.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'name' => 'required',
            'username' => 'required',
        ]);

        User::where('id', $id)->update([
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'username' => $request->input('username'),
        ]);

        return redirect()->back()->with('success', 'Başarıyla güncellendi.');
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'oldPassword' => 'required|string|max:16',
            'newPassword' => 'required|string|min:6|max:16',
            'confirmPassword' => 'required|string|min:6|max:16',
        ]);

        $user = User::findOrFail($id);

        $oldPassword = $request->input('oldPassword');
        $newPassword = $request->input('newPassword');
        $confirmPassword = $request->input('confirmPassword');

        if (Hash::check($oldPassword, $user->password)) {
            if (checkPasswords($newPassword, $confirmPassword) == TRUE) {
                $user->password = Hash::make($newPassword);
                $user->save();
                return redirect()->back()->with('success', 'Yeni Şifreniz Başarıyla Kaydedildi');
            } else {
                return redirect()->back()->with('error', 'Yeni Şifre Ve Tekrarı Uyuşmuyor!');
            }
        } else {
            return redirect()->back()->with('error', 'Eski Şifre Doğru Değil!');
        }
    }
}
