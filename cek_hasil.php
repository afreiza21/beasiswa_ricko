<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beasiswa Programmer</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style-form.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="head flex justify-between">
      <div class="site-logo flex" style="margin: auto">
        <div class="site-logo-text">Beasiswa</div>
      </div>
      <nav style="margin: auto">
        <ul>
          <li><a href="index.php">Pilihan Beasiswa</a></li>
          <li><a href="daftar.php">Daftar</a></li>
          <li><a href="cek_hasil.php">Hasil</a></li>
          <li><a href="tabel.php">Tabel</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="background-atas">
    <div class="judul">Informasi Hasil Beasiswa</div>
  </div>
  <main class="">
    <div class="content">
      <form action="hasil.php" method="post">
        <h1>Cek Hasil Beasiswa</h1>
        <ul class="wrapper">
          <li class="form-row">
            <label for="beasiswaID">Nomor ID Beasiswa Terdaftar</label>
            <input type="text" id="beasiswaID" name="beasiswaID">
          </li>
          <li class="form-row">
            <button type="submit">Cek Hasil</button>
          </li>
        </ul>
      </form>
    </div>
  </main>
  <br>

  <footer>
    <p>&#169; 2024 N. Ricko Afriza Arfiando</p>
  </footer>

  <script src="js/jquery-3.6.3.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>