<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index(){
        //!  the comments of the following lines to simulate a logged-in user until we make authentication work
        if (!Auth::check()) {
            $user = User::find(2);
            Auth::login($user);
        }
        $notifications = Auth::user()->notifications->sortByDesc('created_at');
        return view('notifications',compact('notifications'));
        
    }
}
