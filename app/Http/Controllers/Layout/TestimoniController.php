<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
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
        return view('admin.testimoni.create');
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
            'photo' => 'required|mimes:jpg,png,svg,jpeg',
            'client' => 'required|max:25',
            'testimonis' => 'required|max:150',
        ]);;

        $photoName = Str::random(20) . '.' . $request->photo->getClientOriginalExtension();
        $request->file('photo')->storeAs('public/uploads/testimoni', $photoName);

        Testimoni::create([
            'photo' => $photoName,
            'client' => $request->client,
            'testimonis' => $request->testimonis,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data testimoni!');
        return redirect()->route('layout.homepage');
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
        $testimoni = Testimoni::find($id);

        return view('admin.testimoni.edit', compact(['testimoni']));
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
            'photo' => 'mimes:jpg,png,svg,jpeg',
            'client' => 'required|max:25',
            'testimonis' => 'required|max:150',
        ]);
        
        $testimoni = Testimoni::find($id);

        if($request->has('photo')) {
            if(File::exists('storage/uploads/testimoni/' . $testimoni->photo)) {
                File::delete('storage/uploads/testimoni/' . $testimoni->photo);
            }
            
            $photoName = Str::random(20) . '.' . $request->photo->getClientOriginalExtension();
            $request->file('photo')->storeAs('public/uploads/testimoni', $photoName);
        } else {
            $photoName = $testimoni->photo;
        }

        Testimoni::where('id', $id)->update([
            'photo' => $photoName,
            'client' => $request->client,
            'testimonis' => $request->testimonis,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data testimoni!');
        return redirect()->route('layout.homepage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::where('id', $id)->first();
        if(File::exists('storage/uploads/testimoni/' . $testimoni->photo)) {
            File::delete('storage/uploads/testimoni/' . $testimoni->photo);
        }

        Testimoni::where('id', $id)->delete();

        Alert::success('Berhasil', 'Berhasil menghapus data!');
        return redirect()->route('layout.homepage');
    }
}
