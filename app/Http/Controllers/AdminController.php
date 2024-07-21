<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use DB;
use App\Models\User;
use App\Models\Gejala;
use App\Models\Aturan;
use App\Models\Mahasiswa;
use App\Models\Diagnosis;

class AdminController extends Controller
{
    public function index() {
        $title = "Home";
        $gejala = Gejala::all();
        $aturan = Aturan::all();
        $diagnosis = Diagnosis::all();
        return view('admin.index', compact('title','gejala','diagnosis','aturan'));
    }
    public function profile()
    {
        $title = 'Profile';
        $admin = User::find(Auth::user()->id);
        return view('admin.profile', compact('title','admin'));
    }
    public function updateProfile(Request $request){
        DB::beginTransaction();
        try {
            if (!empty($request->password)) {
                $user = User::find($request->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->no_hp = $request->no_hp;
                $user->password = bcrypt($request->password);
                $user->save();
            }else{
                $user = User::find($request->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->no_hp = $request->no_hp;
                $user->save();
            }
             DB::commit();
            \Session::flash('msg_success','Profile Berhasil Diubah!');
            return Redirect::route('admin.profile');

        } catch (Exception $e) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.profile');
        }
    }

    public function gejala()
    {
        $title = 'Data Gejala';
        $gejala = Gejala::all();
        return view('admin.gejala', compact('title','gejala'));
    }
    public function addGejala(Request $request) {
        DB::beginTransaction();
        try {
            $cekCode = Gejala::where('code',$request->code)->first();
            if (!empty($cekCode)) {
                \Session::flash('msg_error','Gejala Sudah ada!');
                return Redirect::route('admin.gejala');
            }

            $gejala = new Gejala;
            $gejala->code = $request->code;
            $gejala->name = $request->name;
            $gejala->save();

            DB::commit();
            \Session::flash('msg_success','Gejala Berhasil Ditambah!');
            return Redirect::route('admin.gejala');
        } catch (\Throwable $th) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.gejala');
        }
    }
    public function updateGejala(Request $request) {
        DB::beginTransaction();
        try {
                $gejala = Gejala::find($request->id);
                $gejala->code = $request->code;
                $gejala->name = $request->name;
                $gejala->save();

            DB::commit();
            \Session::flash('msg_success','Gejala Berhasil Diubah!');
            return Redirect::route('admin.gejala');
        } catch (\Throwable $th) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.gejala');
        }
    }
    public function deleteGejala($id)
    {
        DB::beginTransaction();
        try {
            $gejala = Gejala::where('id',$id)->delete();

            DB::commit();
            \Session::flash('msg_success','Data Gejala Berhasil Dihapus!');
            return Redirect::route('admin.gejala');

        } catch (Exception $e) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.gejala');
        }
    }

    public function aturan()
    {
        $title = 'Data Aturan';
        $aturan = Aturan::all();
        return view('admin.aturan', compact('title','aturan'));
    }
    public function addAturan(Request $request) {
        DB::beginTransaction();
        try {

            $aturan = new Aturan;
            $aturan->name = $request->name;
            $aturan->mb = $request->mb;
            $aturan->md = $request->md;
            $aturan->save();

            DB::commit();
            \Session::flash('msg_success','Aturan Berhasil Ditambah!');
            return Redirect::route('admin.aturan');
        } catch (\Throwable $th) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.aturan');
        }
    }
    public function updateAturan(Request $request) {
        DB::beginTransaction();
        try {
                $aturan = Aturan::find($request->id);
                $aturan->name = $request->name;
                $aturan->mb = $request->mb;
                $aturan->md = $request->md;
                $aturan->save();

            DB::commit();
            \Session::flash('msg_success','Aturan Berhasil Diubah!');
            return Redirect::route('admin.aturan');
        } catch (\Throwable $th) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.aturan');
        }
    }
    public function deleteAturan($id)
    {
        DB::beginTransaction();
        try {
            $aturan = Aturan::where('id',$id)->delete();

            DB::commit();
            \Session::flash('msg_success','Data Aturan Berhasil Dihapus!');
            return Redirect::route('admin.aturan');

        } catch (Exception $e) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.aturan');
        }
    }

    public function diagnosis()
    {
        $title = 'Data Diagnosis';
        $diagnosis = Diagnosis::all();
        return view('admin.diagnosis', compact('title','diagnosis'));
    }
    public function detailDiagnosis($id)
    {
        $title = 'Data Detail Diagnosis';
        $diagnosa = Diagnosis::find($id);
        return view('admin.detail_diagnosis', compact('title','diagnosa'));
    }
    public function deleteDiagnosis($id)
    {
        DB::beginTransaction();
        try {
            $diagnosis = Diagnosis::where('id',$id)->first();
            $mahasiswa = Mahasiswa::where('id',$diagnosis->mahaiswa_id)->delete();
            $diagnosis->delete();

            DB::commit();
            \Session::flash('msg_success','Data Diagnosis Berhasil Dihapus!');
            return Redirect::route('admin.diagnosis');

        } catch (Exception $e) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('admin.diagnosis');
        }
    }
}
