<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|mimes:jpg,png,svg,jpeg',
            'title' => 'required|max:25',
            'description' => 'required|max:120',
        ]);;

        $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
        $request->file('icon')->storeAs('public/uploads/about', $iconName);

        About::create([
            'icon' => $iconName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data tentang kami!');
        return redirect()->route('layout.about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);

        return view('admin.about.edit', compact(['about']));
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
        $request->validate([
            'icon' => 'mimes:jpg,png,svg,jpeg',
            'title' => 'required|max:25',
            'description' => 'required|max:120',
        ]);
        
        $about = About::find($id);

        if($request->has('icon')) {
            if(File::exists('storage/uploads/about/' . $about->icon)) {
                File::delete('storage/uploads/about/' . $about->icon);
            }
            
            $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
            $request->file('icon')->storeAs('public/uploads/about', $iconName);
        } else {
            $iconName = $about->icon;
        }

        About::where('id', $id)->update([
            'icon' => $iconName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data tentang kami!');
        return redirect()->route('layout.about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::where('id', $id)->first();
        if(File::exists('storage/uploads/about/' . $about->icon)) {
            File::delete('storage/uploads/about/' . $about->icon);
        }

        About::where('id', $id)->delete();

        Alert::success('Berhasil', 'Berhasil menghapus data!');
        return redirect()->route('layout.about');
    }
}
