<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $userApartments = Apartment::where('user_id', '=', $userId)->with(['services', 'sponsorships'])->get();
        return view('admin.home', compact('userApartments'));
    }
}
