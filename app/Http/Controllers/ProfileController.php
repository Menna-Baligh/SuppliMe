<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user) {
        return view('profile.show' ,[
            'user'=>$user
        ]);
    }

    public function edit(User $user) {
        return view('profile.edit',[
            'user'=>$user
        ]);
    }

    public function update() {}
    public function destroy(User $user) {}
}
