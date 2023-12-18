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

    public function getDetailMasyarakat($id_masyarakat)
    {
        return DB::table('tbl_masyarakat')
            ->where('tbl_masyarakat.id_masyarakat',$id_masyarakat)
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
}
