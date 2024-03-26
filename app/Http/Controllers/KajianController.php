<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Illuminate\Http\Request;

class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kajian::all();
        return view('admin.kajian.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('kajian', 'public');
        Kajian::create($data);
        return redirect('/admin/kajian');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('kajian', 'public');
        } else {
            unset($data['foto']);
        }
        Kajian::findOrFail($id)->update($data);
        return redirect('/admin/kajian');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Kajian::findOrFail($id)->delete();
        return  redirect('/admin/kajian');
    }
}
