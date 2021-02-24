
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
<h3>Data User</h3>
 
<a href="{{ url('/create') }}" class="btn btn-primary my-3">Input Data</a>
<table class="table">
	<tr>
		<th scope="col">No</th>
		<th scope="col">Nama</th>
		<th scope="col">Jenis Kelamin</th>
		<th scope="col">Tanggal Lahir</th>
		<th scope="col">Alamat</th>
	</tr>
	@foreach($user as $item)
	<tr>
		<td scope="row"><?php echo $loop->iteration ?></td>
		<td><?php echo $item->nama_awal . " " . $item->nama_belakang ?></td>
		<td><?php echo $item->jenis_kelamin ?></td>
		<td><?php echo $item->tanggal_lahir ?></td>
		<td><?php echo $item->alamat; ?></td>
		
	</tr>
	@endforeach
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