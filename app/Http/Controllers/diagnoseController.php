<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

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
        foreach($request->input('gejalas') as $gejalaId => $newValue) {
            $gejala = Gejala::find($gejalaId);
            if ($gejala) {
                $gejala->value_gejala = $newValue;
                $gejala->save();
            }
            else {
                $gejala->value_gejala = 1;
                $gejala->save();
            }
        }
        return redirect('/disease');
    }

    public function diseaseView() {
        $proses = Gejala::where('value_gejala', '>', 1)->pluck('index_gejala')->toArray();
        
        if(in_array(1, $proses) && in_array(2, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='1'");
            return view('disease', ["penyakit"=>$result]);
        }
        
        elseif(in_array(3, $proses) && in_array(4, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='2'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(5, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='3'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(6, $proses) && in_array(7, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='4'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(8, $proses) && in_array(9, $proses) && in_array(10, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='5'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(11, $proses) && in_array(12, $proses) && in_array(13, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='6'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(14, $proses) && in_array(15, $proses) && in_array(16, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='7'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(12, $proses) && in_array(17, $proses) && in_array(18, $proses) && in_array(19, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='8'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(20, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='9'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(21, $proses) && in_array(22, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='10'");
            return view('disease', ["penyakit"=>$result]);
        }

        elseif(in_array(23, $proses) && in_array(24, $proses)) {
            $result = DB::select("SELECT * from penyakit WHERE index_penyakit='11'");
            return view('disease', ["penyakit"=>$result]);
        }

        else {
            return redirect('/404disease');
        }
    }

    public function guestSolusi(Penyakit $penyakit) {
        return view('guestsolusi', ['penyakit' => $penyakit]);
    }

    public function gejalaView() {
        $result = DB::table('gejala')->paginate(6);
        return view('gejala',["gejala"=>$result]);
    }

    public function deleteGejala(Gejala $gejala) {
        $gejala->delete();

        return redirect('/gejala');
    }

    public function editGejala(Gejala $gejala) {
        return view('editgejala', ['gejala' => $gejala]);
    }

    public function updateGejala(Gejala $gejala, Request $request) {
        $updateValidate = $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required'
        ]);

        $gejala->update($updateValidate);
        return redirect('/gejala');
    }

    public function insertGejalaView() {
        return view('insertgejala');
    }

    public function prosesGejala(Request $request) {
        $addGejala = $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
        ]);

        Gejala::create($addGejala);
        return redirect('/gejala');
    }

    public function penyakitView() {
        $result = DB::table('penyakit')->paginate(6);
        return view('penyakit',["penyakit"=>$result]);
    }

    public function insertPenyakitView() {
        return view('insertpenyakit');
    }

    public function prosesPenyakit(Request $request) {
        $addPenyakit = $request->validate([
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'solusi_penyakit' => 'required',
        ]);

        Penyakit::create($addPenyakit);
        return redirect('/penyakit');
    }

    public function deletePenyakit(Penyakit $penyakit) {
        $penyakit->delete();

        return redirect('/penyakit');
    }

    public function editPenyakit(Penyakit $penyakit) {
        return view('editpenyakit', ['penyakit' => $penyakit]);
    }

    public function updatePenyakit(Penyakit $penyakit, Request $request) {
        $updateValidate = $request->validate([
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'solusi_penyakit' => 'required'
        ]);

        $penyakit->update($updateValidate);
        return redirect('/penyakit');
    }

    public function solusiView(Penyakit $penyakit) {
        return view('adminsolusi', ['penyakit' => $penyakit]);
    }

    public function ruleView() {
        $result = DB::table('aturan')->paginate(6);
        return view('rule',["aturan"=>$result]);
    }

    public function adminLogin(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        
        return back();
    }
    
    public function logout() {
        auth()->logout();
        return redirect('/admin');
    }
}
