<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasyarakatModel;
class MasyarakatController extends Controller
{
    private $MasyarakatModel;
    public function __construct()
    {
        $this->MasyarakatModel = new MasyarakatModel();
    }

    public function index(){
        $data = [
            'masyarakat'=>$this -> MasyarakatModel -> getAllMasyarakat()
        ];
        return view('v_home',$data);
    }

    public function displayPageAdd()
    {
        return view('v_add');
    }

    public function insert(Request $request)
    {
        $nama = $request->nama;
        $status = $request->status;
        $atap = $request->atap;
        $dinding = $request->dinding;
        $lantai = $request->lantai;
        $listrik = $request->listrik;
        $kwh = $request->kwh;
        $pekerjaan_suami = $request->pekerjaan_suami;
        $gaji_suami = $request->gaji_suami;
        $gaji_istri = $request->gaji_istri;
        $jumlah_tanggungan = $request->jumlah_tanggungan;

        if ($status == "Status" || $atap == "Atap" || $dinding == "Dinding"
            || $lantai == "Lantai" || $listrik == "Listrik" || $kwh == "Kwh") {
            return back()->with('error','Isi Seluruh Form');
        }

        $khw_sedikit = 0;
        $kwh_banyak = 0;
        $gaji_suami_rendah = 0;
        $gaji_suami_sedang = 0;
        $gaji_suami_tinggi = 0;
        $gaji_istri_rendah = 0;
        $gaji_istri_sedang = 0;
        $gaji_istri_tinggi = 0;
        $jumlah_tanggungan_rendah = 0;
        $jumlah_tanggungan_sedang = 0;
        $jumlah_tanggungan_tinggi = 0;
        

        // kwh

        if($kwh <= 450){
            $khw_sedikit = 1;
        }else if($kwh >= 450 && $kwh <= 1300){
            $khw_sedikit = (1300 - $kwh)/850;
        }else if($kwh >= 2200){
            $khw_sedikit = 0;
        }

        if($kwh <= 900){
            $kwh_banyak = 0;
        }else if($kwh >= 900 && $kwh <= 2200){
            $kwh_banyak = ($kwh-900)/1300;
        }else if($kwh >= 2200){
            $kwh_banyak = 1;
        }

        // gaji suami
        if($gaji_suami <= 3000000){
            $gaji_suami_rendah = 1;
        }else if($gaji_suami >= 3000000 && $gaji_suami <= 5000000){
            $gaji_suami_rendah = (3000000 - $gaji_suami)/2000000;
        }else if($gaji_suami >= 5000000){
            $gaji_suami_rendah = 0;
        }

        if($gaji_suami <= 4000000 || $gaji_suami >= 7000000){
            $gaji_suami_sedang = 1;
        }else if($gaji_suami >= 4000000 && $gaji_suami <= 6000000){
            $gaji_suami_sedang = ($kwh - 4000000)/2000000;
        }else if($gaji_suami >= 6 && $gaji_suami <= 7){
            $gaji_suami_sedang = (7000000 - $gaji_suami)/1000000;
        }

        if($gaji_suami <= 5000000){
            $gaji_suami_tinggi = 0;
        }else if($gaji_suami >= 5000000 && $gaji_suami <= 7000000){
            $gaji_suami_tinggi = ($gaji_suami - 5000000)/2000000;
        }else if($gaji_suami >= 7000000){
            $gaji_suami_tinggi = 1;
        }

        // gaji istri
        if($gaji_istri <= 3000000){
            $gaji_istri_rendah = 1;
        }else if($gaji_istri >= 3000000 && $gaji_istri <= 5000000){
            $gaji_istri_rendah = (3000000 - $gaji_istri)/2000000;
        }else if($gaji_istri >= 5000000){
            $gaji_istri_rendah = 0;
        }

        if($gaji_istri <= 4000000 || $gaji_istri >= 7000000){
            $gaji_istri_sedang = 1;
        }else if($gaji_istri >= 4000000 && $gaji_istri <= 6000000){
            $gaji_istri_sedang = ($kwh - 4000000)/2000000;
        }else if($gaji_istri >= 6 && $gaji_istri <= 7){
            $gaji_istri_sedang = (7000000 - $gaji_istri)/1000000;
        }

        if($gaji_istri <= 5000000){
            $gaji_istri_tinggi = 0;
        }else if($gaji_istri >= 5000000 && $gaji_istri <= 7000000){
            $gaji_istri_tinggi = ($gaji_istri - 5000000)/2000000;
        }else if($gaji_istri >= 7000000){
            $gaji_istri_tinggi = 1;
        }

        // jumlah tanggungan
        if($jumlah_tanggungan <= 1){
            $jumlah_tanggungan_rendah = 1;
        }else if($jumlah_tanggungan >= 2 && $jumlah_tanggungan <= 4){
            $jumlah_tanggungan_rendah = (5 - $jumlah_tanggungan)/2;
        }else if($jumlah_tanggungan >= 4){
            $jumlah_tanggungan_rendah = 0;
        }

        if($jumlah_tanggungan <= 3 || $jumlah_tanggungan >= 6){
            $jumlah_tanggungan_sedang = 0;
        }else if($jumlah_tanggungan >= 3 && $jumlah_tanggungan <= 5){
            $jumlah_tanggungan_sedang = ($jumlah_tanggungan - 3)/2;
        }else if($jumlah_tanggungan >= 5 && $jumlah_tanggungan <= 6){
            $jumlah_tanggungan_sedang = (6 - $jumlah_tanggungan);
        }

        if($jumlah_tanggungan <= 4){
            $jumlah_tanggungan_tinggi = 0;
        }else if($jumlah_tanggungan >= 4 && $jumlah_tanggungan <= 6){
            $jumlah_tanggungan_tinggi = ($jumlah_tanggungan - 4)/2;
        }else if($jumlah_tanggungan >= 6){
            $jumlah_tanggungan_tinggi = 1;
        }

        $data_masyarakat = [
            'nama'=>$nama,
            'status'=>$status,
            'atap'=>$atap,
            'dinding'=>$dinding,
            'lantai'=>$lantai,
            'listrik'=>$listrik,
            'kwh'=>$kwh,
            'pekerjaan_suami'=>$pekerjaan_suami,
            'gaji_suami'=>$gaji_suami,
            'gaji_istri'=>$gaji_istri,
            'jumlah_tanggungan'=>$jumlah_tanggungan
        ];

        $data_kwh = [
            'kwh_rendah'=>$khw_sedikit,
            'kwh_tinggi'=>$kwh_banyak
        ];

        $data_gaji_suami = [
            'gaji_suami_rendah'=>$gaji_suami_rendah,
            'gaji_suami_sedang'=>$gaji_suami_sedang,
            'gaji_suami_tinggi'=>$gaji_suami_tinggi
        ];

        $data_gaji_istri = [
            'gaji_istri_rendah'=>$gaji_istri_rendah,
            'gaji_istri_sedang'=>$gaji_istri_sedang,
            'gaji_istri_tinggi'=>$gaji_istri_tinggi
        ];

        $data_jumlah_tanggungan = [
            'jumlah_tanggungan_rendah'=>$jumlah_tanggungan_rendah,
            'jumlah_tanggungan_sedang'=>$jumlah_tanggungan_sedang,
            'jumlah_tanggungan_tinggi'=>$jumlah_tanggungan_tinggi
        ];

        try {
            $this->MasyarakatModel->insertMasyarakat($data_masyarakat,$data_gaji_suami,
                $data_gaji_istri, $data_kwh, $data_jumlah_tanggungan);
            
            return redirect()->route('home')->with('success','Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            $pesan_error = $th->getMessage();
            return back()->with('error','Data Gagal Ditambahkan');
        }
    }
}
