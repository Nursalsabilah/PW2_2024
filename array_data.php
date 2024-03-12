<?php
  $numbers = [
    [
        "id" => "1", "nama" => "melon",  "warna" => "hijau","stok" => "200 buah","harga" => "45000/kg","deskripsi" => "buah segar dan manis",
    
    ],
    [
        "id" => "2",
        "nama" => "anggur",
        "warna" => "ungu",
        "stok" => "250 buah",
        "harga" => "30000/kg",
        "deskripsi" => "buah segar, enak dan manis",

    ],
    [
        "id" => "3",
        "nama" => "kiwi",
        "warna" => "putih",
        "stok" => "5000 buah",
        "harga" => "60000/kg",
        "deskripsi" => "enak dan sehat",
    ],
    [
        "id" => "4",
        "nama" => "semangka",
        "warna" => "merah",
        "stok" => "400 buah",
        "harga" => "25000/kg",
        "deskripsi" => "segar, sehat dan enak",
    ],
    [
        "id" => "5",
        "nama" => "markisa",
        "warna" => "orange",
        "stok" => "500 buah",
        "harga" => "30000/kg",
        "deskripsi" => "markisa manis dipetik langsung dari pohon",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
         foreach ($numbers as $number)  {
        ?>
        <tr>            
            <td><?= $number["id"] ?></td>
            <td><?= $number["nama"] ?></td>
            <td><?= $number["warna"] ?></td>
            <td><?= $number["stok"] ?></td>
            <td><?= $number["harga"] ?></td>
            <td><?= $number["deskripsi"] ?></td>
        </tr>
        <?php
         }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>