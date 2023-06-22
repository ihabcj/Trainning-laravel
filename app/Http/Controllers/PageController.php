<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{

    public function users()
    {
        $user = User::withCount('articles')->get();
        return view('users.index',compact('user'));
    }

}
