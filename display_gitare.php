<?php
include 'spajanje.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gitare</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Šifra</th>
          <th scope="col">Proizvođač</th>
          <th scope="col">Model</th>
          <th scope="col">Cijena</th>
          <th scope="col">Količina</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "Select * from gitare";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $sifra = $row['sifra'];
            $proizvodac = $row['proizvodac'];
            $model = $row['model'];
            $cijena = $row['cijena'];
            $kolicina = $row['kolicina'];
            echo '<tr>
          <th scope="row">' . $sifra . '</th>
          <td>' . $proizvodac . '</td>
          <td>' . $model . '</td>
          <td>' . $cijena . '</td>
          <td>' . $kolicina . '</td>
          <td>
          <button class="btn btn-primary"><a href="promijeni_gitare.php? updatesifra=' . $sifra . '" class="text-light">Promijeni</a></button>
          <button class="btn btn-danger"><a href="obrisi_gitare.php? deletesifra=' . $sifra . '" class="text-light">Obriši</a></button>
          </td>
        </tr>';
          }
        }
        ?>



      </tbody>
    </table>
    <button class="btn btn-primary"><a href="dodaj_gitaru1.php" class="text-light" styles="align: center;">Dodaj
        gitaru</a>

    </button>
  </div>
</body>

</html>