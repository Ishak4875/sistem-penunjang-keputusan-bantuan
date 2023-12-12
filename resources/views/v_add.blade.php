@extends('layout.v_layout')
@section('content')

<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="col">
        <div class="card border-0">
          <div class="card-header bg-secondary text-center p-4">
            <h1 class="text-white m-0">Tambah Data</h1>
          </div>
          <div class="card-body rounded-bottom bg-primary p-5">
            <form>
              <div class="form-group">
                <input
                  name="nama"
                  type="text"
                  class="form-control border-0 p-4"
                  placeholder="Masukkan Nama"
                  required="required"
                />
              </div>
              <div class="form-group">
                <select
                  name="status"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option selected>Status</option>
                  <option value="1">Muda</option>
                  <option value="1">Parobaya</option>
                  <option value="2">Lansia</option>
                  <option value="2">Janda</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="atap"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option selected>Atap</option>
                  <option value="1">Seng Bagus</option>
                  <option value="2">Seng Karatan</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="dinding"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option selected>Dinding</option>
                  <option value="1">Tembok Kualitas Rendah</option>
                  <option value="2">Asbes</option>
                  <option value="2">Tembok Bagus</option>
                  <option value="2">Papan</option>
                  <option value="2">Tembok Berlumut</option>
                  <option value="2">Tembok Belum Diplester</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="lantai"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option selected>Lantai</option>
                  <option value="1">Semen</option>
                  <option value="2">Tanah</option>
                  <option value="2">Tehel</option>
                  <option value="2">Papan</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="listrik"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option selected>Listrik</option>
                  <option value="1">PLN</option>
                  <option value="2">Pulsa</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="kwh"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option selected>Kwh</option>
                  <option value="1">450</option>
                  <option value="1">900</option>
                  <option value="2">1200</option>
                </select>
              </div>
              <div class="form-group">
                <input
                  name="pekerjaan_suami"
                  type="text"
                  class="form-control border-0 p-4"
                  placeholder="Masukkan Pekerjaan Suami"
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