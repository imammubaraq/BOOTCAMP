<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Silahkan Login</title>
  </head>
  <body>
    <h1 class="alert alert-primary text-center">Silahkan Isi From!</h1>
<form action="" method="post">
	<div class="table table-warning">
    <div class="table table-warning">
		<label for="exampleFormControlInput1" class="form-label">Nama</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Masukin Nama Anda!!" required> 
	  </div>
	  <div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Email</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Masukin Email Anda" required> 
	  </div>
      <div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">No hp</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" name="nohp" placeholder="Masukini No HP " required> 
	  </div>
      <div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3" required></textarea>
	  </div>

	  <div class="mb-3">
		<button type="submit"" class="btn btn-primary mb-3">Submit</button>
	  </div>
	  </form>

	  <?php

	  if($_POST){
		echo $_POST['nama'];
        echo '</br>';
        echo $_POST['email'];
        echo '</br>';
        echo $_POST['nohp'];
        echo '</br>';
        echo $_POST['alamat'];
	  }

	  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>