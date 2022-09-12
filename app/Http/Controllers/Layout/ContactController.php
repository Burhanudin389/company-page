<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
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
        return view('admin.contact.create');
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
            'name' => 'required|max:25',
            'type' => 'required',
            'contact' => 'required',
        ]);;

        $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
        $request->file('icon')->storeAs('public/uploads/contact', $iconName);

        Contact::create([
            'icon' => $iconName,
            'name' => $request->name,
            'type' => $request->type,
            'contact' => $request->contact,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data kontak!');
        return redirect()->route('layout.contact');
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
        $contact = Contact::find($id);

        return view('admin.contact.edit', compact(['contact']));
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
            'name' => 'required|max:25',
            'type' => 'required',
            'contact' => 'required',
        ]);
        
        $contact = Contact::find($id);

        if($request->has('icon')) {
            if(File::exists('storage/uploads/contact/' . $contact->icon)) {
                File::delete('storage/uploads/contact/' . $contact->icon);
            }
            
            $iconName = Str::random(20) . '.' . $request->icon->getClientOriginalExtension();
            $request->file('icon')->storeAs('public/uploads/contact', $iconName);
        } else {
            $iconName = $contact->icon;
        }

        Contact::where('id', $id)->update([
            'icon' => $iconName,
            'name' => $request->name,
            'type' => $request->type,
            'contact' => $request->contact,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data kontak!');
        return redirect()->route('layout.contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id', $id)->first();
        if(File::exists('storage/uploads/contact/' . $contact->icon)) {
            File::delete('storage/uploads/contact/' . $contact->icon);
        }

        Contact::where('id', $id)->delete();

        Alert::success('Berhasil', 'Berhasil menghapus data!');
        return redirect()->route('layout.contact');
    }
}
