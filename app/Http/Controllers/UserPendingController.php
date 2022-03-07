<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserPendingController extends Controller
{

    public function index()
    {
        $users = User::whereNull('aproved_at')->get();

        return view('components.pending-aproval', compact('users'));
    }

    /*     public function approve()
    {
        return view('user-approval');
    } */
    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['aproved_at' => now()]);

        return redirect()->route('admin.users.pending.index')->withMessage('User approved successfully');
    }
}
