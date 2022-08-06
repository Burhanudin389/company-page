<?php

namespace App\Http\Controllers\Layout;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\MetaData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MetaDataController extends Controller
{
    public function index()
    {
        $data = MetaData::first();
        return view('admin.metadata.index', compact(['data']));
    }

    public function editLogo(Request $request, $id)
    {
        $logo = MetaData::find($id)->first();

        $logoName = Str::random(20) . '.' . $request->logo->getClientOriginalExtension();
        $request->file('logo')->storeAs('public/uploads/metadata', $logoName);

        if(File::exists('storage/uploads/metadata/' . $logo->logo)) {
            File::delete('storage/uploads/metadata/' . $logo->logo);
        }

        MetaData::where('id', 1)->update([
            'logo' => $logoName
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah logo!');
        return redirect()->back();
    }

    public function editFavicon(Request $request, $id)
    {
        $favicon = MetaData::find($id)->first();

        $faviconName = Str::random(20) . '.' . $request->favicon->getClientOriginalExtension();
        $request->file('favicon')->storeAs('public/uploads/metadata', $faviconName);

        if(File::exists('storage/uploads/metadata/' . $favicon->favicon)) {
            File::delete('storage/uploads/metadata/' . $favicon->favicon);
        }

        MetaData::where('id', 1)->update([
            'favicon' => $faviconName
        ]);

        Alert::success('Berhasil', 'Berhasil mengubah favicon!');
        return redirect()->back();
    }
}
