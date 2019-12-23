@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('layouts.depan')

@section('content')
<div class="block" style="padding: 0px">
<div class="overlay" style="background-color: rgba(0, 0, 0, 0.7)">

<br>
<br>
<div class="container">
    <br>
    <form action="/home" method="post" onSubmit="validasi()" enctype="multipart/form-data">
      {{ csrf_field()}}
      <div class="form-group">
        <label style="color: #fff">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" required>
      </div>
    <div class="form-group">
        <label style="color: #fff">Jumlah Donasi</label>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" >Rp. </span>
      </div>
      <input type="text" id="jumlah" name="jumlah_donasi" class="form-control uang" required>
    </div>
    </div>
      <div class="form-group">
        <label style="color: #fff">No Whatsapp</label>
        <input type="text" id="no_wa" name="no_wa" class="form-control no_hp" required>
      </div>
      <div class="form-group">
        <label style="color: #fff">Upload bukti donasi</label>
        <input type="file" id="gambar" name="gambar" class="form-control" required>
      </div>
      <br>
      <div style="text-align: left;" >
      <input type="submit" name="submit" value="Donasi" class="btn btn-primary">
      <a href="index.php" class="btn btn-warning" style="color: #fff">Back</a>
      </div>
    </form>
</div>
</div>
</div>
<script>
function validasi(){
  var nama = document.getElementById("nama").value;
  var jumlah = document.getElementById("jumlah").value;
  var no_wa = document.getElementById("no_wa").value;
  var gambar = document.getElementById("gambar").value;
  
  if(nama != "" && jumlah != "" && no_wa != "" && gambar != ""){
    alert('Terimakasih atas Donasi anda');
    // return true;
  }else{
    alert('Anda harus mengisi semua form yang ada');
  }
}
</script>
@endsection