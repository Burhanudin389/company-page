<?php

namespace App\Http\Controllers\Layout;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SolutionController extends Controller
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
        return view('admin.solution.create');
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
            'description' => 'required|max:150',
        ]);;

        $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
        $request->file('icon')->storeAs('public/uploads/solution', $iconName);

        Solution::create([
            'icon' => $iconName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data solusi!');
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
        $solution = Solution::find($id);

        return view('admin.solution.edit', compact(['solution']));
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
        
        $solution = Solution::find($id);

        if($request->has('icon')) {
            if(File::exists('storage/uploads/solution/' . $solution->icon)) {
                File::delete('storage/uploads/solution/' . $solution->icon);
            }
            
            $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
            $request->file('icon')->storeAs('public/uploads/solution', $iconName);
        } else {
            $iconName = $solution->icon;
        }

        Solution::where('id', $id)->update([
            'icon' => $iconName,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data solusi!');
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
        $solution = Solution::where('id', $id)->first();
        if(File::exists('storage/uploads/solution/' . $solution->icon)) {
            File::delete('storage/uploads/solution/' . $solution->icon);
        }

        Solution::where('id', $id)->delete();

        Alert::success('Berhasil', 'Berhasil menghapus data!');
        return redirect()->route('layout.homepage');
    }
}
