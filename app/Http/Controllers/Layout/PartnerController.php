<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
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
        return view('admin.partner.create');
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
            'logo' => 'required|mimes:jpg,png,svg,jpeg',
            'partner_name' => 'required|max:255',
        ]);;

        $logoName = Str::random(20) . '.' . $request->logo->getClientOriginalExtension();
        $request->file('logo')->storeAs('public/uploads/partner', $logoName);

        Partner::create([
            'logo' => $logoName,
            'partner_name' => $request->partner_name,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data partner!');
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
        $partner = Partner::find($id);

        return view('admin.partner.edit', compact(['partner']));
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
            'logo' => 'mimes:jpg,png,svg,jpeg',
            'partner_name' => 'required|max:255',
        ]);
        
        $partner = Partner::find($id);

        if($request->has('logo')) {
            if(File::exists('storage/uploads/partner/' . $partner->logo)) {
                File::delete('storage/uploads/partner/' . $partner->logo);
            }
            
            $logoName = Str::random(20) . '.' . $request->logo->getClientOriginalExtension();
            $request->file('logo')->storeAs('public/uploads/partner', $logoName);
        } else {
            $logoName = $partner->logo;
        }

        Partner::where('id', $id)->update([
            'logo' => $logoName,
            'partner_name' => $request->partner_name,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data partner!');
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
        $partner = Partner::where('id', $id)->first();
        if(File::exists('storage/uploads/partner/' . $partner->logo)) {
            File::delete('storage/uploads/partner/' . $partner->logo);
        }

        Partner::where('id', $id)->delete();

        Alert::success('Berhasil', 'Berhasil menghapus data!');
        return redirect()->route('layout.homepage');
    }
}
