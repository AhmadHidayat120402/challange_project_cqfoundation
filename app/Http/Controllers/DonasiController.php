<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Donasi::all();
        return view('admin.donasi.index', compact('data'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('donasi', 'public');
        Donasi::create($data);
        return redirect('/admin/donasi');
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('donasi', 'public');
        } else {
            unset($data['foto']);
        }
        Donasi::findOrFail($id)->update($data);
        return redirect('/admin/donasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Donasi::findOrFail($id)->delete();
        return  redirect('/admin/donasi');
    }
}
