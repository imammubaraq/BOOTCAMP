<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>imam mubaraq!</title>
  </head>
  <body>
    <h1 class="alert alert-primary text-center">Form Login!</h1>

    <form action="" method="post">
        <div class="form-group">
           <div class="row">
               <div class="col-md-3">
             <label>Nama Lengkap</label>
             </div>
             <div class="col-md-6">
             <input type="text" class="form-control" name="nama" placeholder="Masukin Nama Anda!!" required> 
             </div>
         </div>
    </div>
        <div class="form-group">
           <div class="row">
               <div class="col-md-3">
             <label>Email</label>
             </div>
             <div class="col-md-6">
             <input type="text" class="form-control" name="email" placeholder="Masukin Email Anda!!" required> 
             </div>
         </div>
    </div>
       <div class="form-group">
           <div class="row">
               <div class="col-md-3">
             <label>No HP</label>
             </div>
             <div class="col-md-6">
             <input type="text" class="form-control" name="nohp" placeholder="Masukin No Anda!!" required> 
             </div>
         </div>
    </div>
    <div class="form-group">
           <div class="row">
               <div class="col-md-3">
             <label>Alamat</label>
             </div>
             <div class="col-md-6">
             <input type="textarea" class="form-control" name="alamat" placeholder="Masukin Alamat Anda!!" required> 
             </div>
         </div>
    </div>
    <div class="alert alert-primary text-center">
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
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>