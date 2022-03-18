<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('camp')->get();

        return view('admin.dashboard', compact('checkouts'));
    }
}
