<?php

namespace App\Http\Controllers\Layout;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Privillege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PrivillegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privilleges = Privillege::orderBy('id', 'DESC')
                        ->limit(3)
                        ->get();

        return view('admin.privillege.index', compact(['privilleges']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.privillege.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
        $request->file('icon')->storeAs('public/uploads/privillege', $iconName);

        $request->validate([
            'icon' => 'required|mimes:jpg,png,svg,jpeg',
            'title' => 'required|max:25',
            'description' => 'required|max:120',
        ]);;

        Privillege::create([
            'icon' => $iconName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data keunggulan!');
        return redirect()->route('privillege.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privillege = Privillege::find($id);

        return view('admin.privillege.edit', compact(['privillege']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $privillege = Privillege::find($id)->first();

        $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
        $request->file('icon')->storeAs('public/uploads/privillege', $iconName);

        if(File::exists('storage/uploads/privillege/' . $privillege->icon)) {
            File::delete('storage/uploads/privillege/' . $privillege->icon);
        }

        $request->validate([
            'icon' => 'required|mimes:jpg,png,svg,jpeg',
            'title' => 'required|max:25',
            'description' => 'required|max:120',
        ]);

        Privillege::where('id', $privillege->id)->update([
            'icon' => $iconName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data keunggulan!');
        return redirect()->route('privillege.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(File::exists('storage/uploads/privillege/' . $privillege->icon)) {
            File::delete('storage/uploads/privillege/' . $privillege->icon);
        }

        Privillege::where('id', $id)->delete();
    }
}
