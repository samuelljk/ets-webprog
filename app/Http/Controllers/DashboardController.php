<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function getUserData()
    {
        $user = Auth::user();

        if ($user) {
            return view('dashboard.index', ['user' => $user]);
        }

        return redirect('/login');
    }
}
