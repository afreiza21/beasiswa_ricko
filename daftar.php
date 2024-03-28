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
    <div class="judul">Daftar Beasiswa</div>
  </div>
  <main class="">
    <div class="content">
      <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
        <h1>Registrasi Beasiswa</h1>
        <ul class="wrapper">
          <li class="form-row">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
          </li>
          <li class="form-row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </li>
          <li class="form-row">
            <label for="nohp">No. HP</label>
            <input type="text" id="nohp" name="nohp" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
          </li>
          <li class="form-row">
            <label for="semester">Semester Saat Ini</label>
            <select id="semester" name="semester" required>
              <option selected hidden>Pilih</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </li>
          <li class="form-row">
            <label for="ipk">IPK Terakhir</label>
            <input class="readonly" type="text" id="ipk" name="ipk" readonly>
          </li>

          <div id="pilihan-div">
          </div>

          <div id="berkas-div">
          </div>

          <li class="form-row">
            <button type="submit" id="button-submit">Submit</button>
          </li>
        </ul>
      </form>
    </div>
  </main>
  <footer>
    <p>&#169; 2024 N. Ricko Afriza Arfiando</p>
  </footer>

  <script src="js/jquery-3.6.3.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <script>
    const ipk = 2.7;
    document.getElementById("ipk").value = ipk;

    let pilihanDiv = document.getElementById('pilihan-div');
    let berkasDiv = document.getElementById('berkas-div');
    let btnSubmit = document.getElementById('button-submit');

    let htmlPilihan = '<li class="form-row" id="pilihan-input"><label for="pilihan">Pilihan Beasiswa</label><select name="pilihan" id="pilihan"><option selected hidden>Pilihan Beasiswa</option><option value="Akademik">Akademik</option><option value="Non Akademik">Non Akademik</option></select></li>';
    let htmlBerkas = '<li class="form-row" id="berkas-input"><label for="berkas">Upload Berkas Syarat</label><input class="berkas" type="file" id="berkas" name="berkas" accept="image/*,.pdf"></li>';

    if (ipk >= 3.0) {
      pilihanDiv.innerHTML = htmlPilihan;
      berkasDiv.innerHTML = htmlBerkas;
      btnSubmit.disabled = false;
    } else if (ipk <= 3.0) {
      btnSubmit.disabled = true;
    }
  </script>
</body>


</html>