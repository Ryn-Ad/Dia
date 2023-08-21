<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Gejala;

class diagnoseController extends Controller
{
    public function homeView() {
        $result = DB::update("UPDATE gejala SET value_gejala = 1");
        return view('landing');
    }
    
    public function diagnoseView() {
        $result = DB::select("SELECT * from gejala");
        return view('diagnose',["gejala"=>$result]);
    }

    public function prosesDiagnose(Request $request) {
        $validateData = $request->validate([
            'value_gejala' => 'required',
        ]);
    }

    public function gejalaView() {
        $result = DB::table('gejala')->paginate(6);
        return view('gejala',["gejala"=>$result]);
    }

    public function insertGejalaView() {
        return view('insertgejala');
    }

    public function prosesGejala(Request $request) {
        $validateData = $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
        ]);

        $kode_gejala = $request->input('kode_gejala');
        $nama_gejala = $request->input('nama_gejala');
    }

    public function deleteGejala() {

    }

    public function penyakitView() {
        $result = DB::table('penyakit')->paginate(6);
        return view('penyakit',["penyakit"=>$result]);
    }

    public function insertPenyakitView() {
        return view('insertpenyakit');
    }

    public function prosesPenyakit(Request $request) {
        $validateData = $request->validate([
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'solusi_penyakit' => 'required',
        ]);
    }

    public function ruleView() {
        $result = DB::table('aturan')->paginate(6);
        return view('rule',["aturan"=>$result]);
    }
}
