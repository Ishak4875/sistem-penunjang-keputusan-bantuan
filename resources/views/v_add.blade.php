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
                  type="text"
                  class="form-control border-0 p-4"
                  placeholder="Masukkan Nama"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control border-0 p-4"
                  placeholder="Masukkan Umur"
                  required="required"
                />
              </div>
              <div class="form-group">
                <select
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
                  type="text"
                  class="form-control border-0 p-4"
                  placeholder="Masukkan Pekerjaan Suami"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Penghasilan Suami (Rp)"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Penghasilan Istri (Rp)"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control border-0 p-4"
                  placeholder="Jumlah Tanggungan"
                  required="required"
                />
              </div>
              <div>
                <button
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