<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MasyarakatModel extends Model
{
    public function getAllMasyarakat()
    {
        return DB::table('tbl_masyarakat')
            ->get();
    }

    public function insertMasyarakat($data_masyarakat, $data_gaji_suami, 
        $data_gaji_istri, $data_kwh, $jumlah_tanggungan){
        DB::table('tbl_masyarakat')
            ->insert($data_masyarakat);

        DB::table('tbl_jumlah_tanggungan')
            ->insert($jumlah_tanggungan);

        DB::table('tbl_gaji_suami')
            ->insert($data_gaji_suami);

        DB::table('tbl_kwh')
            ->insert($data_kwh);

        DB::table('tbl_gaji_istri')
            ->insert($data_gaji_istri);        
    }
}
