<?php
include 'spajanje.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recenzije</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Broj recenzije</th>
          <th scope="col">Šifra proizvoda</th>
          <th scope="col">Proizvođač</th>
          <th scope="col">Model</th>
          <th scope="col">ID korisnika</th>
          <th scope="col">Ime i prezime</th>
          <th scope="col">Ocjena</th>
          <th scope="col">Recenzija</th>
        </tr>
      </thead>
      <tbody>

        <?php
        //upit koji iz baze selektira sve recenzije
        $sql = "Select * from recenzije";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id_recenzije = $row['id_recenzije'];
            $sifra = $row['sifra'];
            $proizvodac = $row['proizvodac'];
            $model = $row['model'];
            $id_korisnik = $row['id_korisnik'];
            $ime_prezime = $row['ime_prezime'];
            $ocjena = $row['ocjena'];
            $recenzija_text = $row['recenzija_text'];
            //svaka recenzija se ispisuje kao redak u tablici
            echo '<tr>
          <th scope="row">' . $id_recenzije . '</th>
          <td>' . $sifra . '</td>
          <td>' . $proizvodac . '</td>
          <td>' . $model . '</td>
          <td>' . $id_korisnik . '</td>
          <td>' . $ime_prezime . '</td>
          <td>' . $ocjena . '</td>
          <td>' . $recenzija_text . '</td>
          <td>
          <button class="btn btn-primary"><a href="promijeni_recenziju.php? updateid_recenzije=' . $id_recenzije . '" class="text-light">Promijeni</a></button>
          <button class="btn btn-danger"><a href="obrisi_recenziju.php? deleteid_recenzije=' . $id_recenzije . '" class="text-light">Obriši</a></button>
          </td>
        </tr>';
          }
        }
        ?>



      </tbody>
    </table>
    <button class="btn btn-primary"><a href="dodaj_recenziju.php" class="text-light" styles="align: center;">Dodaj
        recenziju</a>

    </button>
  </div>
</body>

</html>