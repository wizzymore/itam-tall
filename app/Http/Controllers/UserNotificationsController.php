<?php

namespace App\Http\Controllers;

use App\Models\UserNotification;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function index() {
        return view('user.notifications', [
            'notifications' => UserNotification::all()
        ]);
    }
}
