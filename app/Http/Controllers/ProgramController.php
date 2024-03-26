<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Program::all();
        return view('admin.program.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('program', 'public');
        Program::create($data);
        return redirect('/admin/program');
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('program', 'public');
        } else {
            unset($data['foto']);
        }
        Program::findOrFail($id)->update($data);
        return redirect('/admin/program');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Program::findOrFail($id)->delete();
        return  redirect('/admin/program');
    }
}
