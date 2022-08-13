<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Payment;
use App\Models\Privillege;
use App\Models\Solution;
use App\Models\Testimoni;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function homepage()
    {
        $privilleges = Privillege::get();
        $solutions = Solution::get();
        $payments = Payment::get();
        $partners = Partner::get();
        $testimonis = Testimoni::get();

        return view('admin.layout.homepage', compact(['privilleges', 'solutions', 'payments', 'partners', 'testimonis']));
    }

    public function about()
    {
        $privilleges = Privillege::get();

        return view('admin.layout.about', compact(['privilleges']));
    }
}
