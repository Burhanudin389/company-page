<?php

namespace App\Http\Controllers;

use App\Models\MetaData;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Privillege;
use App\Models\Solution;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * RENDER HOME PAGE
     */
    public function homepage()
    {
        $metaData = MetaData::first();
        $privilleges = Privillege::limit(3)->get();
        $solutions = Solution::get();
        $payments = Payment::limit(5)->get();
        $partners = Partner::get();
        $testimonis = Testimoni::get();

        $delayPrivillege = 1;
        $delayPartner = 1;

        return view('frontend.index', compact(['metaData', 'privilleges', 'solutions', 'payments', 'partners', 'testimonis', 'delayPrivillege', 'delayPartner']));
    }

    /**
     * RENDER ABOUT PAGE
     */
    public function about()
    {
        $metaData = MetaData::first();
        $payments = Payment::limit(5)->get();

        return view('frontend.about', compact(['metaData', 'payments']));
    }

    /**
     * RENDER SOLUTION PAGE
     */
    public function solution()
    {
        $metaData = MetaData::first();
        $payments = Payment::limit(5)->get();
        $partners = Partner::get();
        
        $delayPartner = 1;

        return view('frontend.solution', compact(['metaData', 'payments', 'partners', 'delayPartner']));
    }

    /**
     * RENDER CONTACT PAGE
     */
    public function contact()
    {
        $metaData = MetaData::first();
        $payments = Payment::limit(5)->get();

        return view('frontend.contact', compact(['metaData', 'payments']));
    }
}
