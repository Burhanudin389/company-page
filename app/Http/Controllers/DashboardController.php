<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Partner;
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
        $partners = Partner::get();
        $testimonis = Testimoni::get();

        return view('admin.layout.homepage', compact(['privilleges', 'solutions', 'partners', 'testimonis']));
    }

    public function about()
    {
        $abouts = About::get();

        return view('admin.layout.about', compact(['abouts']));
    }

    public function contact()
    {
        $contacts = Contact::get();

        return view('admin.layout.contact', compact(['contacts']));
    }
}
