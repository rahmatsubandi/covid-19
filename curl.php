<?php

// Buat fungsi http_request
function http_request($url)
{
  // Prepare CURL
  $ch = curl_init();

  // Set URL
  curl_setopt($ch, CURLOPT_URL, $url);

  // Meng aktifkan fungsi transfer nilai yang berupa string
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // Setting agar bisa dijalankan di localhost
  // mematikan ssl verify (https)
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  // Tampung hasil kedalam variabel $output
  $output = curl_exec($ch);

  // tutup curl
  curl_close($ch);

  // mengebamlikan hasil curl
  return $output;
}

// menampung ke variabel data dan Panggil fungsi http_request(url / link api)
$data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

// ubah format menjadi json
$data = json_decode($data, TRUE);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

// Tampung jumlah data
$jumlah = count($data);

$nomor = 1;
for ($i = 0; $i < $jumlah; $i++) {
  $hasil = $data[$i]['attributes'];
?>

  <tr>
    <td><?= $hasil['Provinsi'] ?></td>
    <td><?= $hasil['Kasus_Posi'] ?></td>
    <td><?= $hasil['Kasus_Semb'] ?></td>
    <td><?= $hasil['Kasus_Meni'] ?></td>
  </tr>

<?php
}
?>