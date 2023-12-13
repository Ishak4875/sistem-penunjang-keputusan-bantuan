@extends('layout.v_layout')
@section('content')

@if (session('error'))
  <script>
    $(function () { //ready
      toastr.error("{{session('error')}}");
    });
  </script>  
@endif

<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="col">
        <div class="card border-0">
          <div class="card-header bg-secondary text-center p-4">
            <h1 class="text-white m-0">Tambah Data</h1>
          </div>
          <div class="card-body rounded-bottom bg-primary p-5">
            <form action="/masyarakat/insert" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input
                  name="nama"
                  type="text"
                  class="form-control border-0 p-4"
                  placeholder="Nama"
                  required="required"
                />
              </div>
              <div class="form-group">
                <select
                  name="status"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Status">Status</option>
                  <option value="Muda">Muda</option>
                  <option value="Parobaya">Parobaya</option>
                  <option value="Lansia">Lansia</option>
                  <option value="Duda/Janda">Duda/Janda</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="atap"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Atap">Atap</option>
                  <option value="Seng Bagus">Seng Bagus</option>
                  <option value="Seng Karatan">Seng Karatan</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="dinding"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Dinding">Dinding</option>
                  <option value="Tembok Kualitas Rendah">Tembok Kualitas Rendah</option>
                  <option value="Asbes">Asbes</option>
                  <option value="Tembok Bagus">Tembok Bagus</option>
                  <option value="Papan">Papan</option>
                  <option value="Tembok Berlumut">Tembok Berlumut</option>
                  <option value="Tembok Belum Diplester">Tembok Belum Diplester</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="lantai"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Lantai">Lantai</option>
                  <option value="Semen">Semen</option>
                  <option value="Tanah">Tanah</option>
                  <option value="Tehel">Tehel</option>
                  <option value="Papan">Papan</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="listrik"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Listrik">Listrik</option>
                  <option value="PLN">PLN</option>
                  <option value="Pulsa">Pulsa</option>
                </select>
              </div>
              <div class="form-group">
                <input
                  name="kwh"
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Kwh"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="pekerjaan_suami"
                  type="text"
                  class="form-control border-0 p-4"
                  placeholder="Pekerjaan Suami"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="gaji_suami"
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Penghasilan Suami (Rp)"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="gaji_istri"
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Penghasilan Istri (Rp)"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="jumlah_tanggungan"
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Jumlah Tanggungan"
                  required="required"
                />
              </div>
              <div>
                <button
                  name="btn_add"
                  class="btn btn-secondary btn-block border-0 py-3"
                  type="submit"
                >
                  Tambah
                </button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection