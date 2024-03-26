<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::all();
        return view('admin.banner.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('banner', 'public');
        Banner::create($data);
        return redirect('/admin');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('banner', 'public');
        } else {
            unset($data['foto']);
        }
        Banner::findOrFail($id)->update($data);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Banner::findOrFail($id)->delete();
        return  redirect('/admin');
    }
}
