<?php

namespace App\Http\Livewire;

use App\Models\UserNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavbarNotifications extends Component
{
    public function render()
    {
        return view('livewire.navbar-notifications', [
            'hasNotifications' => $this->hasNotifications(),
        ]);
    }

    protected function hasNotifications(): bool
    {
        return !empty(UserNotification::where('user_id', Auth::user()->id)->first());
    }
}
