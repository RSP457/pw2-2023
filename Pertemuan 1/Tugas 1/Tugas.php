<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
    $yan_fruits = [
        ["Number" => "1" , "Nama buah" => "Mangga" , "warna buah" => "Hijau" , "Stock buah" => "25" , "Harga" => "10000" , "deskripsi" => "Buah Mangga enak sekali buat di rujak atau di makan manis"],
        ["Number" => "2" , "Nama buah" => "Apple" , "warna buah" => "Merah" , "Stock buah" => "40" , "Harga" => "12000" , "deskripsi" => "Buah Apple Merah dan manis sekali segar untuk di konsumsi"],
        ["Number" => "3" , "Nama buah" => "Anggur" , "warna buah" => "Ungu/Hijau" , "Stock buah" => "Terbatas" , "Harga" => "15000" , "deskripsi" => "Buah Anggur Ungu/Hijau manis dan segar sekali masih fresh dan baik untuk di konsumsi"],
        ["Number" => "4" , "Nama buah" => "Alpukat" , "warna buah" => "Hijau" , "Stock buah" => "30" , "Harga" => "8000" , "deskripsi" => "Buah Alpukat sangat segar enak untuk di jus dan di konsumsi"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>
    body{
      background-color: #8A2BE2;

    }
    table {
      text-align: center;
      background-image: url("Img/ff2f.png");
      background-color: #f0ffff;
      background-repeat: no-repeat;
      background-size: 25vh;
      background-attachment: ;
      background-position: center;
      border-radius: 2px;
    }
  </style>

</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4 text-light ">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr class="text-success">
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stock</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach($yan_fruits as $fruit){
            echo "<tr>";
            echo '<td>' . $fruit ["Number"] . '</td>';
            echo '<td>' . $fruit ["Nama buah"] . '</td>';
            echo '<td>' . $fruit ["warna buah"] . '</td>';
            echo '<td>' . $fruit ["Stock buah"] . '</td>';
            echo '<td>' . $fruit ["Harga"] . '</td>';
            echo '<td>' . $fruit ["deskripsi"] . '</td>';
            echo "</tr>";
            
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>