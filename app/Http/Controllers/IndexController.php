<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Aturan;
use App\Models\Mahasiswa;
use App\Models\Diagnosis;
use DB;
use Redirect;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
        $title = "Selamat Datang";
        return view('index', compact('title'));
    }
    public function informasi()
    {
        $title = "Informasi";
        return view('informasi', compact('title'));
    }
    public function form_diagnosa()
    {
        $title = "Form Diagnosa Depresi";
        $gejala = Gejala::all();
        $aturan = Aturan::all();
        return view('form_diagnosa', compact('title','aturan','gejala'));
    }

    public function diagnosa(Request $request)
    {
        // return $request;
        DB::beginTransaction();
        try {
                $input = $request->all();
                $nullValuesCount = 0;

                foreach ($input as $key => $value) {
                    if ($value === null) {
                        $nullValuesCount++;
                    }
                }
                if ($nullValuesCount > 15) {
                    \Session::flash('msg_error','Pilih Gejala Minimal 3');
                    return Redirect::route('form_diagnosa');
                }

                $filteredInput = $request->except(['_token', 'name', 'nim', 'prodi', 'semester', 'alamat', 'no_hp']);
                $newRequest = collect($filteredInput)->filter()->toArray();

                $mahasiswa = new Mahasiswa;
                $mahasiswa->name = $request->name;
                $mahasiswa->nim = $request->nim;
                $mahasiswa->prodi = $request->prodi;
                $mahasiswa->semester = $request->semester;
                $mahasiswa->alamat = $request->alamat;
                $mahasiswa->no_hp = $request->no_hp;
                $mahasiswa->save();

                foreach ($newRequest as $key => $value) {
                    $gejala = Gejala::find($key);
                    $aturan = Aturan::find($value);
                    $cf = $aturan->mb - $aturan->md;
                    $gejalaDipilih[] = [
                        "code" => $gejala->code,
                        "gejala" => $gejala->name,
                        "jawaban" => $aturan->name,
                        "mb" => $aturan->mb,
                        "md" => $aturan->md,
                        "cf" => $cf,
                    ];
                }

                $cf1 = $gejalaDipilih[0]['cf'];
                $cf2 = $gejalaDipilih[1]['cf'];
                $nextValue = $cf1 + $cf2 *(1-$cf1);

                $counter = 0;
                foreach ($gejalaDipilih as $key => $item) {
                    $counter++;
                    if ($counter > 2) {
                        $nextValue = $nextValue + $item['cf'] *(1-$nextValue);
                    }
                }

                if ($nextValue < 0.0) {
                    $status = 'Gangguan Mood';
                }elseif ($nextValue >= 0.0 && $nextValue < 0.4) {
                    $status = 'Depresi Ringan';
                }elseif ($nextValue >= 0.4 && $nextValue < 0.7) {
                    $status = 'Depresi Sedang';
                }elseif ($nextValue >= 0.7) {
                    $status = 'Depresi Berat';
                }

                $diagnosa = new Diagnosis;
                $diagnosa->total = $nextValue;
                $diagnosa->status = $status;
                $diagnosa->presentase = $nextValue * 100;
                $diagnosa->gejala = $gejalaDipilih;
                $diagnosa->mahasiswa_id = $mahasiswa->id;
                $diagnosa->save();

                DB::commit();
            \Session::flash('msg_success','Diagnosa Berhasil!');
            return Redirect::route('hasil_diagnosa',$diagnosa->id);
            } catch (Exception $e) {
            DB::rollback();
            \Session::flash('msg_error','Somethings Wrong!');
            return Redirect::route('form_diagnosa');
        }
    }

    public function hasil_diagnosa($id)
    {
        $title = "Hasil Diagnosa";
        $diagnosa = Diagnosis::find($id);
        return view('hasil_diagnosa', compact('title','diagnosa'));
    }
}
