@extends('layout.v_layout')
@section('content')

@if (session('success'))
  <script>
    $(function () { //ready
      toastr.success("{{session('success')}}");
    });
  </script>  
@endif

<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
  <div class="row align-items-center px-3">
    <div class="col-lg-6 text-center text-lg-left">
      <h4 class="text-white mb-4 mt-5 mt-lg-0">Kelurahan Kessilampe</h4>
      <h1 class="display-3 font-weight-bold text-white">
        Penerima Bantuan PKH
      </h1>
      <p class="text-white mb-4">
        Sistem ini bertujuan untuk dapat membantu pegawai
        kelurahan Kessilampe atau yang berkepentingan dapat
        menyalurkan bantuan Program Keluarga Harapan (PKH)
        kepada orang yang memang membutuhkan dengan baik
      </p>
      <a href="" class="btn btn-secondary mt-1 py-3 px-5">Lihat Rangking</a>
    </div>
    <div class="col-lg-6 text-center text-lg-right">
      <img class="img-fluid mt-5 animated slideInRight" src="{{asset('gambar/')}}/penerima bantuan.png" alt="" />
    </div>
  </div>
</div>
<!-- Header End -->

<!-- Facilities Start -->
<div class="container-fluid pt-5">
  <div class="container pb-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex bg-light shadow-sm border-top rounded mb-4"
          style="padding: 30px"
        >
          <div class="pl-4">
            <h4>Jumlah Penduduk</h4>
            <p class="m-0">
              100
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex bg-light shadow-sm border-top rounded mb-4"
          style="padding: 30px"
        >
          <div class="pl-4">
            <h4>Pendapatan Tertinggi</h4>
            <p class="m-0">
              Rp 180000
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div
          class="d-flex bg-light shadow-sm border-top rounded mb-4"
          style="padding: 30px"
        >
          <div class="pl-4">
            <h4>Pendapatan Terendah</h4>
            <p class="m-0">
              Rp 2000
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facilities Start -->

<!-- Class Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Program Keluarga Harapan</span>
      </p>
      <h1 class="mb-4">Daftar Masyarakat Kessilampe</h1>
    </div>
    <div class="row">
      <div class="col mb-5">
        <div class="d-flex flex-row-reverse mb-3">
          <a class="btn btn-primary" href="/masyarakat/add" role="button">Tambah</a>
        </div>
        <div class="card border-0 bg-light shadow-sm pb-2">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Gaji Suami</th>
                    <th scope="col">Gaji Istri</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;  
                  ?>
                  @foreach ($masyarakat as $data)
                    <tr>
                      <th scope="row">{{$no++}}</th>
                      <td>{{$data->nama}}</td>
                      <td>{{$data->status}}</td>
                      <td>{{$data->gaji_suami}}</td>
                      <td>{{$data->gaji_istri}}</td>
                      <td>
                        <a class="btn btn-info" href="/masyarakat/detail/{{$data->id_masyarakat}}" role="button">Detail</a>
                        <a class="btn btn-warning" href="/masyarakat/edit/{{$data->id_masyarakat}}" role="button">Ubah</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaldelete{{$data->id_masyarakat}}">
                          Hapus
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{$masyarakat->links()}}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Class End -->

@foreach ($masyarakat as $data)
  <div class="modal fade" id="modaldelete{{$data->id_masyarakat}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title text-white" id="exampleModalCenterTitle">{{$data->nama}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-danger">
          Apakah anda yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="/masyarakat/delete/{{$data->id_masyarakat}}" class="btn btn-danger">Ya</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection