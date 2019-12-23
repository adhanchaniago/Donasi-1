@extends('layouts.admin')

@section('content')
  <div class="block" style="padding: 0px">
        <div class="overlay" style="background-color: #fff">
        <h3 style="color: #000; text-align: center;">Ubah</h3>
        <div class="container">
            <br>
            <form action="{{ route('donaturUpdate', $donatur->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label style="color: #fff">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $donatur->nama }}">
              </div>
              <div class="form-group">
                <label style="color: #fff">Jumlah Donasi</label>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" >Rp. </span>
              </div>
              <input type="text" name="jumlah_donasi" class="form-control uang" value="{{ $donatur->jumlah_donasi }}">
            </div>
            </div>
              <div class="form-group">
                <label style="color: #fff">No Whatsapp</label>
                <input type="text" name="no_wa" class="form-control no_hp" value="{{ $donatur->no_wa }}">
              </div>
              {{-- <div class="form-group">
                <label style="color: #fff">Upload bukti donasi</label>
                <input type="file" name="gambar" class="form-control" value="{{ $donatur->gambar }}">
              </div> --}}
              <div style="text-align: left;" >
              <input type="submit" name="submit" class="btn btn-primary">
              <a href="{{ route('donaturs') }}" class="btn btn-warning" style="color: #fff">Back</a>
              </div>
            </form>
        </div>
        </div>
        </div>
        
@endsection
<script>
    $(document).ready(function(){

        // Format mata uang.
        $( '.uang' ).mask('0.000.000.000', {reverse: true});
        $( '.no_hp').mask('0000−0000−00000');

    });
    </script>