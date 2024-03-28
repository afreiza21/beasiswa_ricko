<?php
include 'koneksi.php';

$koneksi = new mysqli("localhost", "root", "", "beasiswa");
$ti = $koneksi->query("select * from tb_beasiswa where pilihan='Akademik'");
$jml_ti = $ti->num_rows;
$si = $koneksi->query("select * from tb_beasiswa where pilihan='Non Akademik'");
$jml_si = $si->num_rows;
?>

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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <style>
    table,
    th,
    td {
      border: 1px solid;
      border-collapse: collapse;
    }
  </style>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Status Ajuan', 'Banyaknya Peserta'],
          ['Terverivikasi',  3/*<?php $jml_ti = $ti->num_rows; ?> */],
          ['Belum Terverifikasi', 0/*<?php $jml_si = $ti->num_rows; ?>*/ ],
        ]);

        var options = {
          title: 'Status Ajuan Beasiswa'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
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
  <div class="judul" style="color:#000; padding: 4rem 0 2rem 0;">Tabel Beasiswa</div>
  <main class="">
    <div class="content">
      <div style="display: flex;justify-content: center;align-items: center;">
        <div class="table-responsive container" style="font-size: 1rem;">
          <table class="table table-bordered table-striped ">
            <thead>
              <tr>
                <th>No</th>
                <th>ID</th>
                <th style="width: 17%">Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Semester</th>
                <th>Pilihan</th>
                <th>Berkas</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $data = mysqli_query($conn, "SELECT * FROM tb_beasiswa");
              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $d['beasiswaID'] ?></td>
                  <td><?php echo $d['nama'] ?></td>
                  <td><?php echo $d['email'] ?></td>
                  <td><?php echo $d['nohp'] ?></td>
                  <td><?php echo $d['semester'] ?></td>
                  <td><?php echo $d['pilihan'] ?></td>
                  <td><a href="berkas/<?php echo $d['berkas'] ?>"><?php echo $d['berkas'] ?></a></td>
                  <td <?php
                      if ($d['status_ajuan'] == "Belum Diverifikasi") {
                        echo "style='color: red'";
                      } else {
                        echo "style='color: green'";
                      }
                      ?>><?php echo $d['status_ajuan'] ?></td>
                  <td> <a href="update.php?beasiswaID=<?php echo $d['beasiswaID'];
                                                      ?>&status_ajuan=<?php echo $d['status_ajuan'] ?>" class="btn btn-info  btn-sm">
                      Verif
                    </a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </main>
  </div>
  <br>
  <br>
  <br>
  <br>

  <footer>
    <p>&#169; 2024 N. Ricko Afriza Arfiando</p>
  </footer>

  <script src="js/jquery-3.6.3.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>