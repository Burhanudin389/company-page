<?php

namespace App\Http\Controllers\Layout;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PaymentController extends Controller
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
        return view('admin.payment.create');
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
            'bank_name' => 'required|max:25',
        ]);;

        $logoName = Str::random(20) . '.' . $request->logo->getClientOriginalExtension();
        $request->file('logo')->storeAs('public/uploads/payment', $logoName);

        Payment::create([
            'logo' => $logoName,
            'bank_name' => $request->bank_name,
        ]);

        Alert::success('Berhasil', 'Berhasil menambah data metode pembayaran!');
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
        $payment = Payment::find($id);

        return view('admin.payment.edit', compact(['payment']));
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
            'bank_name' => 'required|max:25',
        ]);
        
        $payment = Payment::find($id);

        if($request->has('logo')) {
            if(File::exists('storage/uploads/payment/' . $payment->logo)) {
                File::delete('storage/uploads/payment/' . $payment->logo);
            }
            
            $logoName = Str::random(20) . '.' . $request->logo->getClientOriginalExtension();
            $request->file('logo')->storeAs('public/uploads/payment', $logoName);
        } else {
            $logoName = $payment->logo;
        }

        Payment::where('id', $id)->update([
            'logo' => $logoName,
            'bank_name' => $request->bank_name,
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah data metode pembayaran!');
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
        $payment = Payment::where('id', $id)->first();
        if(File::exists('storage/uploads/payment/' . $payment->logo)) {
            File::delete('storage/uploads/payment/' . $payment->logo);
        }

        Payment::where('id', $id)->delete();

        Alert::success('Berhasil', 'Berhasil menghapus data!');
        return redirect()->route('layout.homepage');
    }
}
