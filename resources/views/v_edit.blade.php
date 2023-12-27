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
            <h1 class="text-white m-0">Perbarui Data</h1>
          </div>
          <div class="card-body rounded-bottom bg-primary p-5">
            <form action="/masyarakat/update/{{$masyarakat->id_masyarakat}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input
                  name="nama"
                  type="text"
                  value="{{$masyarakat->nama}}"
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
                  <option value="Status">-Pilih Status-</option>
                  <option value="Muda" {{$masyarakat->status == 'Muda' ? 'selected' : ''}}>Muda</option>
                  <option value="Parobaya" {{$masyarakat->status == 'Parobaya' ? 'selected' : ''}}>Parobaya</option>
                  <option value="Lansia" {{$masyarakat->status == 'Lansia' ? 'selected' : ''}}>Lansia</option>
                  <option value="Duda/Janda" {{$masyarakat->status == 'Duda/Janda' ? 'selected' : ''}}>Duda/Janda</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="atap"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Atap">-Pilih Atap-</option>
                  <option value="Seng Bagus" {{$masyarakat->atap == 'Seng Bagus' ? 'selected' : ''}}>Seng Bagus</option>
                  <option value="Seng Karatan" {{$masyarakat->atap == 'Seng Karatan' ? 'selected' : ''}}>Seng Karatan</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="dinding"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Dinding">-Pilih Dinding-</option>
                  <option value="Tembok Kualitas Rendah" {{$masyarakat->dinding == 'Tembok Kualitas Rendah' ? 'selected' : ''}}>Tembok Kualitas Rendah</option>
                  <option value="Asbes" {{$masyarakat->dinding == 'Asbes' ? 'selected' : ''}}>Asbes</option>
                  <option value="Tembok Bagus" {{$masyarakat->dinding == 'Tembok Bagus' ? 'selected' : ''}}>Tembok Bagus</option>
                  <option value="Papan" {{$masyarakat->dinding == 'Papan' ? 'selected' : ''}}>Papan</option>
                  <option value="Tembok Berlumut" {{$masyarakat->dinding == 'Tembok Berlumut' ? 'selected' : ''}}>Tembok Berlumut</option>
                  <option value="Tembok Belum Diplester" {{$masyarakat->dinding == 'Tembok Belum Diplester' ? 'selected' : ''}}>Tembok Belum Diplester</option>
                  <option value="Kalsiboard" {{$masyarakat->dinding == 'Kalsiboard' ? 'selected' : ''}}>Kalsiboard</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="lantai"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Lantai">-Pilih Lantai-</option>
                  <option value="Semen" {{$masyarakat->lantai == 'Semen' ? 'selected' : ''}}>Semen</option>
                  <option value="Tanah" {{$masyarakat->lantai == 'Tanah' ? 'selected' : ''}}>Tanah</option>
                  <option value="Tehel" {{$masyarakat->lantai == 'Tehel' ? 'selected' : ''}}>Tehel</option>
                  <option value="Papan" {{$masyarakat->lantai == 'Papan' ? 'selected' : ''}}>Papan</option>
                </select>
              </div>
              <div class="form-group">
                <select
                  name="listrik"
                  class="custom-select border-0 px-4"
                  style="height: 47px"
                >
                  <option value="Listrik">-Pilih Listrik-</option>
                  <option value="PLN" {{$masyarakat->listrik == 'PLN' ? 'selected' : ''}}>PLN</option>
                  <option value="PLN (Subsidi)" {{$masyarakat->listrik == 'PLN (Subsidi)' ? 'selected' : ''}}>PLN (Subsidi)</option>
                  <option value="Pulsa" {{$masyarakat->listrik == 'Pulsa' ? 'selected' : ''}}>Pulsa</option>
                </select>
              </div>
              <div class="form-group">
                <input
                  name="kwh"
                  type="number"
                  value="{{$masyarakat->kwh}}"
                  class="form-control border-0 p-4"
                  placeholder="Kwh"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="pekerjaan_suami"
                  type="text"
                  value="{{$masyarakat->pekerjaan_suami}}"
                  class="form-control border-0 p-4"
                  placeholder="Pekerjaan Suami"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="pekerjaan_istri"
                  type="text"
                  value="{{$masyarakat->pekerjaan_istri}}"
                  class="form-control border-0 p-4"
                  placeholder="Pekerjaan Istri"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="gaji_suami"
                  type="number"
                  value="{{$masyarakat->gaji_suami}}"
                  class="form-control border-0 p-4"
                  placeholder="Penghasilan Suami (Rp)"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="gaji_istri"
                  type="number"
                  value="{{$masyarakat->gaji_istri}}"
                  class="form-control border-0 p-4"
                  placeholder="Penghasilan Istri (Rp)"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  name="jumlah_tanggungan"
                  type="number"
                  value="{{$masyarakat->jumlah_tanggungan}}"
                  class="form-control border-0 p-4"
                  placeholder="Jumlah Tanggungan"
                  required="required"
                />
              </div>
              <div>
                <button
                  name="btn_udpate"
                  class="btn btn-secondary btn-block border-0 py-3"
                  type="submit"
                >
                  Perbarui
                </button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection