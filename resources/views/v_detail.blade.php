@extends('layout.v_layout')
@section('content')

<div class="container-fluid pt-5">
    <div class="col">
        <table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">Nama</th>
                <th scope="col">:</th>
                <th scope="col">{{$masyarakat->nama}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Status</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->status}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Atap</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->atap}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Dinding</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->dinding}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Lantai</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->lantai}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Listrik</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->listrik}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">KWH</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->kwh}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">KWH Kecil</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->kwh_kecil}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">KWH Besar</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->kwh_besar}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Pekerjaan Suami</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->pekerjaan_suami}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Pekerjaan Istri</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->pekerjaan_istri}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Total Penghasilan Keluarga</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->total_pendapatan}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">Total Penghasilan Keluarga Rendah</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->total_pendapatan_rendah}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">Total Penghasilan Keluarga Sedang</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->total_pendapatan_sedang}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">Total Penghasilan Keluarga Tinggi</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->total_pendapatan_tinggi}}</th>
              </tr>
              <tr class="table-primary">
                <th scope="col">Jumlah Tanggungan</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->jumlah_tanggungan}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">Jumlah Tanggungan Sedikit</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->jumlah_tanggungan_sedikit}}</th>
              </tr>
              <tr class="table-warning">
                <th scope="col">Jumlah Tanggungan Banyak</th>
                <th scope="">:</th>
                <th scope="col">{{$masyarakat->jumlah_tanggungan_banyak}}</th>
              </tr>
            </thead>
        </table>
    </div>
</div>

@endsection