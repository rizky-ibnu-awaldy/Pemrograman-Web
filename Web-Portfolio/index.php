<?php
require '/laragon/www/belajar-web/uts3/koneksidb.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!--Google Fonts-->
    <style>
@import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Open+Sans:ital,wght@1,300&display=swap');
</style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!--My Css-->
    <link rel="stylesheet" href="style.css"/>

    <title >My Portfolio | Rizky Ibnu</title>
  </head>
  <body">
      <!--Pembuatan Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My Portfolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pendidikan">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Find Me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Akhir Navabar-->



      <!--Pembuatan Jumbotron-->
      <section class="jumbotron text-center">
          <img src = "img/gambarku3.jpg" alt="Rizky Ibnu" width="350" class="rounded-circle img-thumbnail"/>
        <h1 class="p2 fs-1 fw-bold"><?php echo ucwords($data[0]['nama']);?></h1>
        <p class="p2 fs-4 fw-bold"><?php echo ucwords($data[0]['as']);?></p>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L0,224L72,224L72,128L144,128L144,256L216,256L216,224L288,224L288,128L360,128L360,256L432,256L432,128L504,128L504,128L576,128L576,64L648,64L648,64L720,64L720,160L792,160L792,96L864,96L864,256L936,256L936,256L1008,256L1008,288L1080,288L1080,128L1152,128L1152,320L1224,320L1224,160L1296,160L1296,128L1368,128L1368,128L1440,128L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z"></path></svg>
        
      </section>
      <!--Akhir Jumbotron-->



      <!--Pembuatan About-->
      <section id="about">
<div class="container2">
  <div class="row text-center mb-3">
    <div class="col">
      <h2 class="p1 fw-bold fs-1"><ins>About Me</ins></h2>
    </div>
  </div>
  <div class="row justify-content-around fs-5 text-center">
    <div class="col-md-4">
      <p><?php echo ucwords($data[0]['about']);?></p>
    </div>
    <div class="col-md-4">
      <p><?php echo ucwords($data[0]['about2'])?></p>
    </div>
  </div>
</div>
</section>
<!--Akhir About-->



<!--Pembuatan Projcets-->
<section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="p2 fw-bold fs-1"><ins>My Projects</ins></h2>
          </div>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/arduino.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judprojek']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['projek']);?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/web.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judprojek2']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['projek2']);?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/database1.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judprojek3']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['projek3']);?></p>
              </div>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L0,224L72,224L72,128L144,128L144,256L216,256L216,224L288,224L288,128L360,128L360,256L432,256L432,128L504,128L504,128L576,128L576,64L648,64L648,64L720,64L720,160L792,160L792,96L864,96L864,256L936,256L936,256L1008,256L1008,288L1080,288L1080,128L1152,128L1152,320L1224,320L1224,160L1296,160L1296,128L1368,128L1368,128L1440,128L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z"></path></svg>
    </section>
    <!--Akhir Projects-->



    <!--Pembuatan Skills-->
    <section id="skills">
    <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2 class="p1 fw-bold fs-1"><ins>Skills</ins></h2>
                    <p style="text-align:start";><b><?php echo ucwords($data[0]['skills']);?></b></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 75%; background-color: #5000ca;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <p style="text-align:start";><br><b><?php echo ucwords($data[0]['skills2']);?></b></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 70%; background-color: #5000ca;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <p style="text-align:start"><br><b><?php echo ucwords($data[0]['skills3']);?></b></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 65%; background-color: #5000ca;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                    <p style="text-align:start";><br><b><?php echo ucwords($data[0]['skills4']);?></b></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 60%; background-color: #5000ca;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>

    </section>

    <!--Akhir Skills-->


    <!--Pembuatan Pendidikan-->
    <section id="pendidikan">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="p2 fw-bold fs-1"><ins>Education</ins></h2>
          </div>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/sd.png" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judul']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['ket']);?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/smp.png" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judul2']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['ket2']);?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/sma.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judul3']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['ket3']);?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card project-tile">
              <img src="img/kuliah.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body bg-dark">
                <h5 class="card-title p2"><?php echo ucwords($data[0]['judul4']);?></h5>
                <p class="card-text p2"><?php echo ucwords($data[0]['ket4']);?></p>
              </div>
            </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L0,224L72,224L72,128L144,128L144,256L216,256L216,224L288,224L288,128L360,128L360,256L432,256L432,128L504,128L504,128L576,128L576,64L648,64L648,64L720,64L720,160L792,160L792,96L864,96L864,256L936,256L936,256L1008,256L1008,288L1080,288L1080,128L1152,128L1152,320L1224,320L1224,160L1296,160L1296,128L1368,128L1368,128L1440,128L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z"></path></svg>
    </section>
    <!--Akhir Pendidikan-->

    <!--Pembuatan Contact-->
    <section id="contact">
<div class="container2">
  <div class="row text-center mb-3">
    <div class="col">
      <h2 class="p1 fw-bold fs-1"><ins>Find Me!!!</ins></h2><br>
    </div>
  </div>
  <div class="row justify-content-around fs-5 text-center">
    <div class="col-md-4">
      <p class="p1 fs-3">My Instagram:</p>
      <p><a href="https://www.instagram.com/rizkyibnn/"> <i class=" fs-1 bi bi-instagram"></i></a></p>
    </div>
    <div class="col-md-4">
      <p class="p1 fs-3">My Facebook:</p>
      <p><a href="https://www.facebook.com/profile.php?id=100009799037951"><i class="fs-1 bi bi-facebook"></i></a></p>
    </div>
    <div class="col-md-4">
      <p class="p1 fs-3">My GitHub:</p>
      <p><a href="https://github.com/rizky-ibnu-awaldy"><i class="fs-1 bi bi-github"></i></a></p>
      
    </div>
  </div>
</div>
</section>
    
    <!--Akhir Contact-->

    <!--Pembuatan Footer-->
    <footer class="bg-dark text-white text-center p-3">
      <p class="p2">Created by Rizky Ibnu Awaldy</p>
    </footer>
    <!--Akhir Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

  </body>
</html>