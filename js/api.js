$(document).ready(function () {
  // Panggil fungsi menampilkan semua data global
  semuaData();
  dataProvinsi();

  // Refresh otomatis
  setInterval(function () {
    semuaData();
    dataProvinsi();
  }, 5000);

  function semuaData() {
    $.ajax({
      url: "https://coronavirus-19-api.herokuapp.com/countries/indonesia/",
      success: function (data) {
        try {
          var json = data;
          var negara = data.country;
          var positif = data.cases;
          var meninggal = data.deaths;
          var sembuh = data.recovered;
          var rawat = data.active;

          $("#data-positif").html(positif);
          $("#data-meninggal").html(meninggal);
          $("#data-sembuh").html(sembuh);
          $("#data-rawat").html(rawat);
        } catch {
          alert("Error");
        }
      },
    });
  }

  function dataProvinsi() {
    $.ajax({
      url: "curl.php",
      type: "GET",
      success: function (data) {
        try {
          $("#table-data").html(data);
        } catch {
          alert("Error");
        }
      },
    });
  }
});
