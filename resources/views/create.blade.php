<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>OOP PHP</title>
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col">
  <h1>OOP PHP</h1>
<!-- <h2>WWW.MALASNGODING.COM</h2> -->
<h3>Input User</h3>

<form method="post" action="{{ url('/store') }}">
    @csrf
  <div class="form-group">
    <label for="nama_awal">Nama Depan</label>
    <input type="text" class="form-control" name="nama_awal" id="nama_awal">
  </div>
  @error('nama_awal')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label for="nama_akhir">Nama Belakang</label>
    <input type="text" class="form-control" name="nama_akhir" id="nama_akhir">
  </div>
  @error('nama_akhir')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
      <option for="jenis_kelamin" value="laki-laki">Laki-Laki</option>
      <option for="jenis_kelamin" value="perempuan">Perempuan</option>
    </select>
  </div>
  @error('jenis_kelamin')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
  </div>
  @error('tanggal_lahir')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" rows=3 name="alamat"> </textarea>
  </div>
  @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>