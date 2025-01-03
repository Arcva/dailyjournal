<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="sticky-top navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">My Daily Journal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scedule">Scedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
   </nav>
   <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
        <div class="container"> 
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://images.unsplash.com/photo-1444492696363-332accfd40c0?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dHJlZXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid" width="450">
                <div>
                    <h1 class="fw-bold display-4">Daily Journal</h1>
                    <h4 class="lead display-6">Ini adalah buku catatan online milik <b>Narendra Wijaya Nuryashofa</b> mahasiswa Universitas Dian Nuswantoro Prodi  S1-Teknik Informatika</h4>
                </div>
            </div>
        </div>
   </section>

    <section id="article" class="text-center p-5">
        <div class="container">
                <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                    $sql = "SELECT * FROM article ORDER BY tanggal DESC";
                    $hasil = $conn->query($sql); 

                    while($row = $hasil->fetch_assoc()){
                    ?>
                        <div class="col">
                        <div class="card h-100">
                            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                            <h5 class="card-title"><?= $row["judul"]?></h5>
                            <p class="card-text">
                                <?= $row["isi"]?>
                            </p>
                            </div>
                            <div class="card-footer">
                            <small class="text-body-secondary">
                                <?= $row["tanggal"]?>
                            </small>
                            </div>
                        </div>
                        </div>
                        <?php
                    }
                ?> 
            </div>
        </div>
    </section>
<section id="galeri" class="text-center p-5 bg-danger-subtle text-sm-start">
  <h1 class="fw-bold text-center">-Gallery-</h1>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gambar3.jpg" class="d-block w-100" alt="Lorong H.2 UDINUS">
      </div>
      <div class="carousel-item">
        <img src="gambar4.jpg" class="d-block w-100" alt="Parkiran UDINUS">
      </div>
      <div class="carousel-item">
        <img src="gambar5.jpg" class="d-block w-100" alt="Daily HSR">
      </div>
      <div class="carousel-item">
        <img src="gambar6.jpg" class="d-block w-100" alt="Depan Ruang Kelas">
      </div>
      <div class="carousel-item">
        <img src="gambar7.jpg" class="d-block w-100" alt="Ruang Kelas">
      </div>
      <div class="carousel-item">
        <img src="gambar8.jpg" class="d-block w-100" alt="Grinding MHW">
      </div>
      <div class="carousel-item">
        <img src="gambar9.jpg" class="d-block w-100" alt="Lose Streak Palo">
      </div>
      <div class="carousel-item">
        <img src="gambar2.jpg" class="d-block w-100" alt="Frieren">
      </div>
      <div class="carousel-item">
        <img src="gambar1.jpg" class="d-block w-100" alt="Himmel">
      </div>
      <div class="carousel-item">
        <img src="monhunt1.jpg" class="d-block w-100" alt="MHW Food">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<section id="scedule">
  <h1 class="fw-bold text-center">-Scedule-</h1>
  <div class="container">
    <div class="d-md-flex justify-content-center row row-cols-1 row-cols-md-4 g-5 text-center justify-content-center p-5">
      <div class="col">
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">Senin</div>
          <div class="card-body bg-light text-dark">
            <h5 class="card-title">09.30-12.00</h5>
            <div class="card-text">Logika Informatika</div>
            <div class="card-text">H.4.11</div>
            <h5 class="card-title">12.30-14.10</h5>
            <div class="card-text">Basis Data</div>
            <div class="card-text">H.4.3</div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
          <div class="card-header">Selasa</div>
          <div class="card-body bg-light text-dark">
            <h5 class="card-title">08.40-10.20</h5>
            <div class="card-text">Pendidikan Kewarganegaraan</div>
            <div class="card-text">Aula.E.3</div>
            <h5 class="card-title">12.30-15.00</h5>
            <div class="card-text">Sistem Operasi</div>
            <div class="card-text">H.4.10</div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Rabu</div>
          <div class="card-body bg-light text-dark">
            <h5 class="card-title">09.30-12.00</h5>
            <div class="card-text">Probabilitas dan Statistik</div>
            <div class="card-text">H.4.8</div>
            <h5 class="card-title">12.30-15.00</h5>
            <div class="card-text">Rekayasa Perangkat Lunak</div>
            <div class="card-text">H.4.4</div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">Kamis</div>
          <div class="card-body bg-light text-dark">
            <h5 class="card-title">10.20-12.00</h5>
            <div class="card-text">Basis Data</div>
            <div class="card-text">D.3.N</div>
            <h5 class="card-title">14.10-15.50</h5>
            <div class="card-text">Pemrograman Berbasis Web</div>
            <div class="card-text">D.2.J</div>
          </div>
        </div>
      </div>
    </div>
  <div>
</section>
<section id="profile">
  <h1 class="fw-bold text-center">-Profile-</h1>
  <div class="container">
    <div class="d-md-flex flex-md-row align-items-center p-5 g-5 ms-auto justify-content-center">
      <img src="img/saya.jpg" class="rounded-circle d-md-flex justify-content-start" alt="saya">
      <div class="d-md p-5 g-4 align-items-center border-end">
        <div class="text-center">
          <h3>Narendra Wijaya Nuryashofa</h3>
          <div>Mahasiswa Teknik Informatika</div>
        </div>
        <br>
        <div class="text-center">
          <div><b>NIM: </b>A11.2023.15303</div>
          <div><b>Program Studi: </b>Teknik Informatika-S1</div>
          <div><b>Email: </b>111202315303@mhs.dinus.ac.id</div>
          <div><b>Telepon: </b>+62-8960-8979-885</div>
          <div><b>Alamat: </b>Sarirejo, RT.03/RW.06</div>
        </div>
      </div>
    </div>
  </div>
</section>
   <br>
   <footer class="text-center">
        <div class="d-sm-flex justify-content-center">
          <i class="bi bi-whatsapp"></i>
          <i class="bi bi-twitter"></i>
          <i class="bi bi-instagram"></i>
        </div>
        <div class="mb-5">
            Narendra Wijaya Nuryashofa &copy; 2024
        </div>
   </footer>
</body>
</html>