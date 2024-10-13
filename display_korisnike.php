<?php
include 'spajanje.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Korisnici</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID korisnika</th>
          <th scope="col">Ime i prezime</th>
          <th scope="col">email</th>
          <th scope="col">Broj telefona</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "Select * from korisnik";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id_korisnik = $row['id_korisnik'];
            $ime_prezime = $row['ime_prezime'];
            $email = $row['email'];
            $broj_telefona = $row['broj_telefona'];
            echo '<tr>
          <th scope="row">' . $id_korisnik . '</th>
          <td>' . $ime_prezime . '</td>
          <td>' . $email . '</td>
          <td>' . $broj_telefona . '</td>
          <td>
          <button class="btn btn-primary"><a href="promijeni_korisnike.php? updateid_korisnik=' . $id_korisnik . '" class="text-light">Promijeni</a></button>
          <button class="btn btn-danger"><a href="obrisi_korisnike.php? deleteid_korisnik=' . $id_korisnik . '" class="text-light">Obriši</a></button>
          </td>
        </tr>';
          }
        }
        ?>



      </tbody>
    </table>
    <button class="btn btn-primary"><a href="dodaj_korisnik.php" class="text-light" styles="align: center;">Dodaj
        korisnika</a>

    </button>
  </div>
</body>

</html>