<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\MetaData;
use App\Models\Partner;
use App\Models\Privillege;
use App\Models\Solution;
use App\Models\Testimoni;

class FrontendController extends Controller
{
    /**
     * RENDER HOME PAGE
     */
    public function homepage()
    {
        $metaData = MetaData::first();
        $favicon = $metaData->favicon;
        $privilleges = Privillege::limit(3)->get();
        $solutions = Solution::get();
        $partners = Partner::get();
        $testimonis = Testimoni::get();

        $delayPrivillege = 1;
        $delayPartner = 1;
        
        return view('frontend.index', compact(['metaData', 'privilleges', 'solutions', 'partners', 'testimonis', 'delayPrivillege', 'delayPartner', 'favicon']));
    }

    /**
     * RENDER ABOUT PAGE
     */
    public function about()
    {
        $metaData = MetaData::first();
        $favicon = $metaData->favicon;
        $abouts = About::get();
        
        $delayAbout = 1;
        
        return view('frontend.about', compact(['metaData', 'abouts', 'delayAbout', 'favicon']));
    }

    /**
     * RENDER SOLUTION PAGE
     */
    public function solution()
    {
        $metaData = MetaData::first();
        $favicon = $metaData->favicon;
        $partners = Partner::get();
        $solutions = Solution::get();
        
        $delayPartner = 1;

        return view('frontend.solution', compact(['metaData', 'partners', 'solutions', 'delayPartner', 'favicon']));
    }

    /**
     * RENDER CONTACT PAGE
     */
    public function contact()
    {
        $metaData = MetaData::first();
        $favicon = $metaData->favicon;
        $contacts = Contact::get();
        
        $delayContact = 1;

        return view('frontend.contact', compact(['metaData', 'contacts', 'delayContact', 'favicon']));
    }
}
