<?php
include 'spajanje.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Narudžbe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Broj Narudžbe</th>
          <th scope="col">ID korisnika</th>
          <th scope="col">Ime i prezime</th>
          <th scope="col">Šifra proizvoda</th>
          <th scope="col">Proizvođač</th>
          <th scope="col">Model</th>
          <th scope="col">Količina</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "Select * from narudzbe";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id_narudzbe = $row['id_narudzbe'];
            $id_korisnik = $row['id_korisnik'];
            $ime_prezime = $row['ime_prezime'];
            $sifra = $row['sifra'];
            $proizvodac = $row['proizvodac'];
            $model = $row['model'];
            $kolicina = $row['kolicina'];
            echo '<tr>
          <th scope="row">' . $id_narudzbe . '</th>
          <td>' . $id_korisnik . '</td>
          <td>' . $ime_prezime . '</td>
          <td>' . $sifra . '</td>
          <td>' . $proizvodac . '</td>
          <td>' . $model . '</td>
          <td>' . $kolicina . '</td>
          <td>
          <button class="btn btn-primary"><a href="promijeni_narudzbu.php? updateid_narudzbe=' . $id_narudzbe . '" class="text-light">Promijeni</a></button>
          <button class="btn btn-danger"><a href="obrisi_narudzbu.php? deleteid_narudzbe=' . $id_narudzbe . '" class="text-light">Obriši</a></button>
          </td>
        </tr>';
          }
        }
        ?>



      </tbody>
    </table>
    <button class="btn btn-primary"><a href="dodaj_narudzbu.php" class="text-light" styles="align: center;">Dodaj
        narudžbu</a>

    </button>
  </div>
</body>

</html>