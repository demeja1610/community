<?php

namespace App\View\Components;

use App\Repositories\LKRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class UserComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $userID = Auth::id();
        $userData = (new LKRepository())->lkUser($userID)->first();
        return view('components.user-component', ['user' => $userData]);
    }
}
