<?php
$nama_ulan = "Wulan Utami";
$umur_ulan = 15;
$hobi_ulan = "Mendengarkan Musik";
$tinggi_ulan = 163;
$nama_nida = "Siti Nida Nurhoriyah";
$umur_nida = 16;
$hobi_nida = "Berenang";
$tinggi_nida = 160;
$nama_hasan = "Ahmad Hasanudin";
$umur_hasan = 14;
$hobi_hasan = "Ngoding Is My Life";
$tinggi_hasan = 172;
$rata_rata = ($tinggi_ulan + $tinggi_nida + $tinggi_hasan) / 3;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Tugas Pertama PWPB </title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


  <style>
    .gambar {
      margin: 5px;
      padding: 10px;
      width: 250px;
      height: 250px;
      margin-right: 50px;
      border-radius: 10px;
      object-fit: cover;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted"><b>
              <h1>kelompok 8</h1>
            </b></a>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
              <title>Search</title>
              <circle cx="10.5" cy="10.5" r="7.5" />
              <path d="M21 21l-5.2-5.2" />
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>
    </header>

    <div class="navigasi">
      <nav class="nav d-flex justify-content-between">
        <ul>

          <a class="btn btn-sm btn-outline-secondary"  href="pwpb1.php">Tugas Satu</a>
          <a class="btn btn-sm btn-outline-secondary"  href="tugaskedua.php">Tugas Dua</a>
          <a class="btn btn-sm btn-outline-secondary"  href="form.php">Tugas Tiga</a>
          <a class="btn btn-sm btn-outline-secondary">Tugas empat</a>
          <a class="btn btn-sm btn-outline-secondary"  href="index.php">Home</a><br><br>

      </nav>
      </ul>

    </div>


    <div class="jumbotron p-7 p-md-5 text-white rounded bg-dark">
      <div class="col-md-10 px-0">
        <h1 class=" font-italic">Biodata Kami:)</h1>

      </div>
    </div>
    <!--- BIODATA WULAN -->
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-270 position-relative">
          <div class="col p-4 d-flex flex-column position-static">


            <h2 class="mb-0"> <?php echo $nama_ulan ?> </h2><br>

            <p class="card-text mb-auto"> Umur : <?php echo $umur_ulan ?> tahun<br>
              Tinggi Badan : <?php echo $tinggi_ulan ?> cm<br>
              Hobi : <?php echo $hobi_ulan ?></p><br>
            <a href="#" class="btn btn-sm btn-outline-secondary">Selengkapnya</a>
          </div>

          <div class="gambar">
            <img src="ulan.jpg" height="270px" width="270px"><br>
          </div>
        </div>
      </div>
      <!--- BIODATA selesai -->

      <!--- BIODATA nida -->
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">


            <h3 class="mb-0"><?php echo $nama_nida ?></h3><br>
            <div class="mb-1 text-muted"></div>
            <p class="mb-auto">Umur : <?php echo $umur_nida ?> tahun<br>
              Tinggi Badan : <?php echo $tinggi_nida ?> cm<br>
              Hobi : <?php echo $hobi_nida ?></p><br><br>
            <a href="#" class="btn btn-sm btn-outline-secondary">Selengkapnya</a>
          </div>
          <div class="gambar">
            <img src="nida.jpg" height="270px" width="270px">
          </div>

          <style>
            /*.gambar{
            margin: 5px;
            padding: 10px;
            width: 250px;
            height: 250px;
            margin-right: 50px;
            border-radius: 50px;
          }*/
          </style>

        </div>
      </div>
    </div>
  </div>
  <!--- BIODATA selesai -->

  <!--- BIODATA hasan -->

  <div class="kotak">
    <div class="persegi">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">


          <h2 class="mb-0"> <?php echo $nama_hasan ?></h2><br>

          <p class="card-text mb-auto">Umur : <?php echo $umur_hasan ?> tahun<br>
            Tinggi Badan : <?php echo $tinggi_hasan ?> cm<br>
            Hobi : <?php echo $hobi_hasan ?></p><br><br>
          <a href="#" class="btn btn-sm btn-outline-secondary">Selengkapnya</a>
        </div>
        <div class="gambar">
          <img src="hasan.jpg" height="270px" width="270px">
        </div>

      </div>
    </div>

    <style>
      .kotak {
        margin-left: 120px;
      }

      .persegi {
        margin-right: 56%;
      }
    </style>



    <!--- BIODATA selesai -->
    <p>Tinggi rata-rata kami : <?php echo $rata_rata ?> </p>

    <hr>


    <footer>
      &copy;2019 kelompok 8

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>