@extends('layout.v_layout')
@section('content')

<!-- Class Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Program Keluarga Harapan</span>
      </p>
      <h1 class="mb-4">Daftar Perangkingan Penerima Bantuan</h1>
    </div>
    <div class="row">
      <div class="col mb-5">
        <div class="card border-0 shadow-sm pb-2">
            <table class="table">
              <div class="input-group mb-3 col-4 float-right">
                <input type="text" class="form-control" placeholder="Cari Nama" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <a class="btn btn-outline-secondary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></a>
                </div>
              </div>
                <thead class="thead table-primary" style="text-align: center">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Gaji Suami</th>
                    <th scope="col">Gaji Istri</th>
                    <th scope="col">Status Kelayakan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody style="text-align: center">
                  <?php
                    $no = 1;  
                  ?>
                  @foreach ($rangking as $data)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->gaji_suami}}</td>
                        <td>{{$data->gaji_istri}}</td>
                        <td>{{$data->layak_mendapatkan_bantuan}}</td>
                        <td>
                          <a class="btn btn-info" href="/masyarakat/detail/{{$data->id_masyarakat}}" role="button">Detail</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{$rangking->links()}}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Class End -->
@endsection