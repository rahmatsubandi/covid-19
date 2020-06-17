<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="shortcut icon" href="img/title.svg" />

  <title>Covid-19</title>
</head>

<body class="bg-light">
  <div class="text-center" id="jam"></div>
  <div class="img">
    <!-- Title -->
    <div class="col text-center">
      <h1 class="font-weight-lighter">
        Pantauan Data Penyebaran Virus Covid-19
      </h1>
      <h3 style="color: red;" class="text-monospace font-weight-bold" id="data-name">
        Indonesia
      </h3>
    </div>
    <!-- End Title -->
    <br /><br />
    <div class="container text-center">
      <div class="row">
        <div class="col-md-3">
          <div class="bg-warning box text-white">
            <div class="row">
              <img class="card-img-top" src="img/positif.svg" style="height:100px;" />
              <div class="col-md-12">
                <h5>Positif</h5>
                <h3 id="data-positif">Loading..</h3>
                <h5>Orang</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bg-danger box text-white">
            <div class="row">
              <img class="card-img-top" src="img/meninggal.svg" style="height:100px;" />
              <div class="col-md-12">
                <h5>Meninggal</h5>
                <h3 id="data-meninggal">Loading..</h3>
                <h5>Orang</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bg-success box text-white">
            <div class="row">
              <img class="card-img-top" src="img/sembuh.svg" style="height:100px;" />
              <div class="col-md-12">
                <h5>Sembuh</h5>
                <h3 id="data-sembuh">Loading..</h3>
                <h5>Orang</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bg-info box text-white">
            <div class="row">
              <img class="card-img-top" src="img/dirawat.svg" style="height:100px;" />
              <div class="col-md-12">
                <h5>Dirawat</h5>
                <h3 id="data-rawat">Loading..</h3>
                <h5>Orang</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir row -->
      </div>

      <!-- Akhir container -->
    </div>
  </div>
  <br>
  <h4 class="text-center">Data Berdasarkan Provinsi</h4>
  <div class="container table-responsive">
    <table class="table table-bordered mt-5 table-hover">
      <thead class="text-center">
        <th class="bg-info">Data Provinsi</th>
        <th class="bg-warning">Data Positif</th>
        <th class="bg-success">Data Sembuh</th>
        <th class="bg-danger">Data Meninggal</th>
      </thead>
      <tbody id="table-data" class="text-center"></tbody>
    </table>
  </div>

  <br>
  <div class="container">
    <p style="color: red;" class="text-monospace text-center h4">
      #dirumahaja🏠
    </p>
    <br>
  </div>
  <footer class="footer-transparent text-center mb-2">
    Handcrafted with ❤ by Rahmat Subandi
    <div class="img-footer"></div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- API COVID-19 -->
  <script src="js/api.js"></script>
  <script src="js/jam.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>

</html>