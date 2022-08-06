<?php

namespace App\Http\Controllers;

use App\Models\MetaData;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * RENDER HOME PAGE
     */
    public function homepage()
    {
        $metaData = MetaData::first();

        return view('frontend.index', compact(['metaData']));
    }

    /**
     * RENDER ABOUT PAGE
     */
    public function about()
    {
        $metaData = MetaData::first();

        return view('frontend.about', compact(['metaData']));
    }

    /**
     * RENDER SOLUTION PAGE
     */
    public function solution()
    {
        $metaData = MetaData::first();

        return view('frontend.solution', compact(['metaData']));
    }

    /**
     * RENDER CONTACT PAGE
     */
    public function contact()
    {
        $metaData = MetaData::first();

        return view('frontend.contact', compact(['metaData']));
    }
}
