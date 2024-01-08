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
          <div class="table-responsive">
              <table class="table">
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
                  @foreach ($rangking as $index => $data)
                    <tr>
                        <th scope="row">{{$rangking->firstItem() + $index}}</th>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->gaji_suami}}</td>
                        <td>{{$data->gaji_istri}}</td>
                        <td>{{$data->layak_mendapatkan_bantuan}}</td>
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
          </div>
            <div class="d-flex justify-content-center">
              {{ $rangking->links() }}
          </div>
        </div>
      </div>
    </div>
    <a
      href="/masyarakat/search"
      class="btn btn-secondary btn-block border-0 py-3"
      type="submit">
        Cari Data
    </a>
  </div>
</div>

@foreach ($rangking as $data)
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