<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;

class MasyarakatModel extends Model
{
    public function getAllMasyarakat()
    {
        return DB::table('tbl_masyarakat')->paginate(10);
    }

    public function getPendapatanTerendah()
    {
        return DB::table('tbl_masyarakat')->min('total_pendapatan');
    }

    public function getPendapatanTertinggi()
    {
        return DB::table('tbl_masyarakat')->max('total_pendapatan');
    }

    public function getJumlahMasyarakat()
    {
        return DB::table('tbl_masyarakat')->count('*');
    }

    public function getDetailMasyarakat($id_masyarakat)
    {
        return DB::table('tbl_masyarakat')
            ->where('id_masyarakat',$id_masyarakat)
            ->first();
    }

    public function insertMasyarakat($data_masyarakat){
        DB::table('tbl_masyarakat')
            ->insert($data_masyarakat);
    }

    public function updateMasyarakat($id_masyarakat,$data_masyarakat)
    {
        DB::table('tbl_masyarakat')
            ->where('id_masyarakat',$id_masyarakat)
            ->update($data_masyarakat);
    }

    public function deleteMasyarakat($id_masyarakat)
    {
        DB::table('tbl_masyarakat')
            ->where('id_masyarakat',$id_masyarakat)
            ->delete();
    }

    public function getRangking()
    {
        $perPage = 10;
        $query = "
            SELECT
                *,
                CASE
                    WHEN (kwh_kecil AND total_pendapatan_rendah AND jumlah_tanggungan_sedikit) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_rendah AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_sedang AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_besar AND total_pendapatan_rendah AND jumlah_tanggungan_sedikit) THEN 'Layak'
                    WHEN (kwh_besar AND total_pendapatan_rendah AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_sedang AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_kecil AND total_pendapatan_tinggi AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_kecil AND total_pendapatan_tinggi AND jumlah_tanggungan_banyak) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_sedang AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_sedang AND jumlah_tanggungan_banyak) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_tinggi AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_tinggi AND jumlah_tanggungan_banyak) THEN 'Tidak Layak'
                END AS layak_mendapatkan_bantuan
            FROM tbl_masyarakat
            ORDER BY layak_mendapatkan_bantuan, total_pendapatan
        ";

        $results = DB::select($query);
        $total = count($results);
        $page = Request::get('page', 1);
        $currentPageItems = array_slice($results, ($page - 1) * $perPage, $perPage);
        $paginator = new LengthAwarePaginator(
            $currentPageItems, 
            $total, 
            $perPage, 
            $page, 
            ['path' => Request::url()]
        );
        return $paginator;          
    }

    public function searchAllKategori($nama,$status,$atap,$dinding,$lantai,$listrik,$pekerjaan_suami,$pekerjaan_istri,$kategori_kelayakan)
    {
        $perPage = 10;
        $query = "
        SELECT *
        FROM (
            SELECT
                *,
                CASE
                    WHEN (kwh_kecil AND total_pendapatan_rendah AND jumlah_tanggungan_sedikit) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_rendah AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_sedang AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_besar AND total_pendapatan_rendah AND jumlah_tanggungan_sedikit) THEN 'Layak'
                    WHEN (kwh_besar AND total_pendapatan_rendah AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_sedang AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_kecil AND total_pendapatan_tinggi AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_kecil AND total_pendapatan_tinggi AND jumlah_tanggungan_banyak) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_sedang AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_sedang AND jumlah_tanggungan_banyak) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_tinggi AND jumlah_tanggungan_sedikit) THEN 'Tidak Layak'
                    WHEN (kwh_besar AND total_pendapatan_tinggi AND jumlah_tanggungan_banyak) THEN 'Tidak Layak'
                END AS layak_mendapatkan_bantuan
            FROM tbl_masyarakat
            WHERE 1 = 1
        ";
        
        // Tambahkan kondisi WHERE jika variabel tidak kosong
        if ($nama !== '') {
            $query .= " AND nama LIKE '%$nama%'";
        }
        
        if ($status !== '') {
            $query .= " AND status LIKE '%$status%'";
        }
        
        if ($atap !== '') {
            $query .= " AND atap LIKE '%$atap%'";
        }
        
        if ($dinding !== '') {
            $query .= " AND dinding LIKE '%$dinding%'";
        }
        
        if ($lantai !== '') {
            $query .= " AND lantai LIKE '%$lantai%'";
        }
        
        if ($listrik !== '') {
            $query .= " AND listrik LIKE '%$listrik%'";
        }
        
        if ($pekerjaan_suami !== '') {
            $query .= " AND pekerjaan_suami LIKE '%$pekerjaan_suami%'";
        }
        
        if ($pekerjaan_istri !== '') {
            $query .= " AND pekerjaan_istri LIKE '%$pekerjaan_istri%'";
        }
        
        $query .= " ) AS masyarakat_tidak_layak";

        if ($kategori_kelayakan !== '') {
            $query .= " WHERE layak_mendapatkan_bantuan = '$kategori_kelayakan'";
        }

        $query .= " ORDER BY layak_mendapatkan_bantuan,total_pendapatan";

        $results = DB::select($query);
        $total = count($results);
        $page = Request::get('page', 1);
        $currentPageItems = array_slice($results, ($page - 1) * $perPage, $perPage);
        $paginator = new LengthAwarePaginator(
            $currentPageItems, 
            $total, 
            $perPage, 
            $page, 
            ['path' => Request::url()]
        );
        return $paginator;
    }
}
