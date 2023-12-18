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

    public function getDetail($id_masyarakat)
    {
        if(!$this->MasyarakatModel->getDetailMasyarakat($id_masyarakat)){
            abort(404);
        }
        $data = [
            'masyarakat'=>$this->MasyarakatModel->getDetailMasyarakat($id_masyarakat)
        ];
        return view('v_detail',$data);
    }

    public function displayPageAdd()
    {
        return view('v_add');
    }

    public function displayPageEdit($id_masyarakat)
    {
        if(!$this->MasyarakatModel->getDetailMasyarakat($id_masyarakat)){
            abort(404);
        }
        $data = [
            'masyarakat'=>$this->MasyarakatModel->getDetailMasyarakat($id_masyarakat)
        ];
        return view('v_edit',$data);
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
        $pekerjaan_istri = $request->pekerjaan_istri;
        $gaji_suami = $request->gaji_suami;
        $gaji_istri = $request->gaji_istri;
        $jumlah_tanggungan = $request->jumlah_tanggungan;
        $total_pendapatan = $gaji_istri + $gaji_suami;

        if ($status == "Status" || $atap == "Atap" || $dinding == "Dinding"
            || $lantai == "Lantai" || $listrik == "Listrik" || $kwh == "Kwh") {
            return back()->with('error','Isi Seluruh Form');
        }

        $kwh_kecil = 0;
        $kwh_besar = 0;
        $total_pendapatan_rendah = 0;
        $total_pendapatan_sedang = 0;
        $total_pendapatan_tinggi = 0;
        $jumlah_tanggungan_sedikit = 0;
        $jumlah_tanggungan_banyak = 0;
        

        // kwh

        if($kwh <= 450){
            $kwh_kecil = 1;
        }else if($kwh >= 450 && $kwh <= 1300){
            $kwh_kecil = (1300 - $kwh)/850;
        }else if($kwh >= 2200){
            $kwh_kecil = 0;
        }

        if($kwh <= 900){
            $kwh_besar = 0;
        }else if($kwh >= 900 && $kwh <= 2200){
            $kwh_besar = ($kwh-900)/1300;
        }else if($kwh >= 2200){
            $kwh_besar = 1;
        }

        // total pendapatan
        if($total_pendapatan <= 4000000){
            $total_pendapatan_rendah = 1;
        }else if($total_pendapatan >= 4000000 && $total_pendapatan <= 7500000){
            $total_pendapatan_rendah = (7500000 - $total_pendapatan)/3500000;
        }else if($total_pendapatan >= 7500000){
            $total_pendapatan_rendah = 0;
        }

        if($total_pendapatan <= 5750000 || $total_pendapatan >= 11000000){
            $total_pendapatan_sedang = 0;
        }else if($total_pendapatan >= 5750000 && $total_pendapatan <= 9250000){
            $total_pendapatan_sedang = ($total_pendapatan - 5750000)/3500000;
        }else if($total_pendapatan >= 9250000 && $total_pendapatan <= 11000000){
            $total_pendapatan_sedang = (11000000 - $total_pendapatan)/1750000;
        }

        if($total_pendapatan <= 7500000){
            $total_pendapatan_tinggi = 0;
        }else if($total_pendapatan >= 7500000 && $total_pendapatan <= 11000000){
            $total_pendapatan_tinggi = ($total_pendapatan - 7500000)/3500000;
        }else if($total_pendapatan >= 11000000){
            $total_pendapatan_tinggi = 1;
        }

        // jumlah tanggungan
        if($jumlah_tanggungan <= 2){
            $jumlah_tanggungan_sedikit = 1;
        }else if($jumlah_tanggungan >= 2 && $jumlah_tanggungan <= 4){
            $jumlah_tanggungan_sedikit = (4 - $jumlah_tanggungan)/2;
        }else if($jumlah_tanggungan >= 4){
            $jumlah_tanggungan_sedikit = 0;
        }

        if($jumlah_tanggungan <= 3){
            $jumlah_tanggungan_banyak = 0;
        }else if($jumlah_tanggungan >= 3 && $jumlah_tanggungan <= 5){
            $jumlah_tanggungan_banyak = ($jumlah_tanggungan - 3)/2;
        }else if($jumlah_tanggungan >= 5){
            $jumlah_tanggungan_banyak = 1;
        }

        $data_masyarakat = [
            'nama'=>$nama,
            'status'=>$status,
            'atap'=>$atap,
            'dinding'=>$dinding,
            'lantai'=>$lantai,
            'listrik'=>$listrik,
            'kwh'=>$kwh,
            'kwh_kecil'=>$kwh_kecil,
            'kwh_besar'=>$kwh_besar,
            'pekerjaan_suami'=>$pekerjaan_suami,
            'pekerjaan_istri'=>$pekerjaan_istri,
            'gaji_suami'=>$gaji_suami,
            'gaji_istri'=>$gaji_istri,
            'total_pendapatan'=>$total_pendapatan,
            'total_pendapatan_rendah'=>$total_pendapatan_rendah,
            'total_pendapatan_sedang'=>$total_pendapatan_sedang,
            'total_pendapatan_tinggi'=>$total_pendapatan_tinggi,
            'jumlah_tanggungan'=>$jumlah_tanggungan,
            'jumlah_tanggungan_sedikit'=>$jumlah_tanggungan_sedikit,
            'jumlah_tanggungan_banyak'=>$jumlah_tanggungan_banyak,
        ];

        try {
            $this->MasyarakatModel->insertMasyarakat($data_masyarakat);
            
            return redirect()->route('home')->with('success','Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            $pesan_error = $th->getMessage();
            var_dump($pesan_error);
            die;
            return back()->with('error','Data Gagal Ditambahkan');
        }
    }

    public function update(Request $request)
    {
        $id_masyarakat = $request->id_masyarakat;
        $nama = $request->nama;
        $status = $request->status;
        $atap = $request->atap;
        $dinding = $request->dinding;
        $lantai = $request->lantai;
        $listrik = $request->listrik;
        $kwh = $request->kwh;
        $pekerjaan_suami = $request->pekerjaan_suami;
        $pekerjaan_istri = $request->pekerjaan_istri;
        $gaji_suami = $request->gaji_suami;
        $gaji_istri = $request->gaji_istri;
        $jumlah_tanggungan = $request->jumlah_tanggungan;
        $total_pendapatan = $gaji_istri + $gaji_suami;

        if ($status == "Status" || $atap == "Atap" || $dinding == "Dinding"
            || $lantai == "Lantai" || $listrik == "Listrik" || $kwh == "Kwh") {
            return back()->with('error','Isi Seluruh Form');
        }

        $kwh_kecil = 0;
        $kwh_besar = 0;
        $total_pendapatan_rendah = 0;
        $total_pendapatan_sedang = 0;
        $total_pendapatan_tinggi = 0;
        $jumlah_tanggungan_sedikit = 0;
        $jumlah_tanggungan_banyak = 0;
        

        // kwh

        if($kwh <= 450){
            $kwh_kecil = 1;
        }else if($kwh >= 450 && $kwh <= 1300){
            $kwh_kecil = (1300 - $kwh)/850;
        }else if($kwh >= 2200){
            $kwh_kecil = 0;
        }

        if($kwh <= 900){
            $kwh_besar = 0;
        }else if($kwh >= 900 && $kwh <= 2200){
            $kwh_besar = ($kwh-900)/1300;
        }else if($kwh >= 2200){
            $kwh_besar = 1;
        }

        // total pendapatan
        if($total_pendapatan <= 4000000){
            $total_pendapatan_rendah = 1;
        }else if($total_pendapatan >= 4000000 && $total_pendapatan <= 7500000){
            $total_pendapatan_rendah = (7500000 - $total_pendapatan)/3500000;
        }else if($total_pendapatan >= 7500000){
            $total_pendapatan_rendah = 0;
        }

        if($total_pendapatan <= 5750000 || $total_pendapatan >= 11000000){
            $total_pendapatan_sedang = 1;
        }else if($total_pendapatan >= 5750000 && $total_pendapatan <= 9250000){
            $total_pendapatan_sedang = ($total_pendapatan - 5750000)/3500000;
        }else if($total_pendapatan >= 9250000 && $total_pendapatan <= 11000000){
            $total_pendapatan_sedang = (11000000 - $total_pendapatan)/1750000;
        }

        if($total_pendapatan <= 7500000){
            $total_pendapatan_tinggi = 0;
        }else if($total_pendapatan >= 7500000 && $total_pendapatan <= 11000000){
            $total_pendapatan_tinggi = ($total_pendapatan - 7500000)/3500000;
        }else if($total_pendapatan >= 11000000){
            $total_pendapatan_tinggi = 1;
        }

        // jumlah tanggungan
        if($jumlah_tanggungan <= 2){
            $jumlah_tanggungan_sedikit = 1;
        }else if($jumlah_tanggungan >= 2 && $jumlah_tanggungan <= 4){
            $jumlah_tanggungan_sedikit = (4 - $jumlah_tanggungan)/2;
        }else if($jumlah_tanggungan >= 4){
            $jumlah_tanggungan_sedikit = 0;
        }

        if($jumlah_tanggungan <= 3){
            $jumlah_tanggungan_banyak = 0;
        }else if($jumlah_tanggungan >= 3 && $jumlah_tanggungan <= 5){
            $jumlah_tanggungan_banyak = ($jumlah_tanggungan - 3)/2;
        }else if($jumlah_tanggungan >= 5){
            $jumlah_tanggungan_banyak = 1;
        }

        $data_masyarakat = [
            'nama'=>$nama,
            'status'=>$status,
            'atap'=>$atap,
            'dinding'=>$dinding,
            'lantai'=>$lantai,
            'listrik'=>$listrik,
            'kwh'=>$kwh,
            'kwh_kecil'=>$kwh_kecil,
            'kwh_besar'=>$kwh_besar,
            'pekerjaan_suami'=>$pekerjaan_suami,
            'pekerjaan_istri'=>$pekerjaan_istri,
            'gaji_suami'=>$gaji_suami,
            'gaji_istri'=>$gaji_istri,
            'total_pendapatan'=>$total_pendapatan,
            'total_pendapatan_rendah'=>$total_pendapatan_rendah,
            'total_pendapatan_sedang'=>$total_pendapatan_sedang,
            'total_pendapatan_tinggi'=>$total_pendapatan_tinggi,
            'jumlah_tanggungan'=>$jumlah_tanggungan,
            'jumlah_tanggungan_sedikit'=>$jumlah_tanggungan_sedikit,
            'jumlah_tanggungan_banyak'=>$jumlah_tanggungan_banyak,
        ];

        try {
            $this->MasyarakatModel->updateMasyarakat($id_masyarakat,$data_masyarakat);
            
            return redirect()->route('home')->with('success','Data Berhasil Diperabarui');
        } catch (\Throwable $th) {
            $pesan_error = $th->getMessage();
            return back()->with('error','Data Gagal Diperbarui');
        }
    }

    public function delete($id_masyarakat)
    {
        try {
            $this->MasyarakatModel->deleteMasyarakat($id_masyarakat);
            return redirect()->route('home')->with('success','Data Berhasil Diperabarui');
        } catch (\Throwable $th) {
            $pesan_error = $th->getMessage();
            return back()->with('error','Data Gagal Diperbarui');
        }
    }
}
