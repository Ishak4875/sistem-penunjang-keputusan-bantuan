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
        return DB::table('tbl_masyarakat')
            ->paginate(10);
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

        // Jumlah item per halaman
        $perPage = 10;

        // Query SQL
        $query = "
            SELECT
                *,
                CASE
                    WHEN (kwh_kecil AND total_pendapatan_rendah AND jumlah_tanggungan_sedikit) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_rendah AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_kecil AND total_pendapatan_sedang AND jumlah_tanggungan_banyak) THEN 'Layak'
                    WHEN (kwh_besar AND total_pendapatan_rendah AND jumlah_tanggungan_sedikit) THEN 'Mungkin Layak'
                    WHEN (kwh_besar AND total_pendapatan_rendah AND jumlah_tanggungan_banyak) THEN 'Mungkin Layak'
                    WHEN (kwh_kecil AND total_pendapatan_sedang AND jumlah_tanggungan_sedikit) THEN 'Mungkin Layak'
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

        // Eksekusi query
        $results = DB::select($query);

        // Hitung total item
        $total = count($results);

        // Mendapatkan halaman yang diminta
        $page = Request::get('page', 1);

        // Memotong array untuk halaman tertentu
        $currentPageItems = array_slice($results, ($page - 1) * $perPage, $perPage);

        // Membuat objek LengthAwarePaginator
        $paginator = new LengthAwarePaginator(
            $currentPageItems, 
            $total, 
            $perPage, 
            $page, 
            ['path' => Request::url()]
        );

        // Mengembalikan hasil paginasi
        return $paginator;          
    }
}
