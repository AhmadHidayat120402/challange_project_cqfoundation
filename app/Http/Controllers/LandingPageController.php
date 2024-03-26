<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Donasi;
use App\Models\Kajian;
use App\Models\Program;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $dataDonasi = Donasi::all();
        $dataKajian = Kajian::all();
        $dataProgram = Program::all();
        $dataBanner = Banner::all();
        return view('landingpage', compact(['dataDonasi', 'dataKajian', 'dataProgram', 'dataBanner']));
    }
}
