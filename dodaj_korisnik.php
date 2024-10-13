<?php
include 'spajanje.php';
if(isset($_POST['submit'])){
    $ime_prezime = $_POST['ime_prezime'];
    $email = $_POST['email'];
    $broj_telefona = $_POST['broj_telefona'];

    $sql="insert into `korisnik` (ime_prezime, email, broj_telefona)
    values ('$ime_prezime','$email','$broj_telefona')";
    $result=mysqli_query($con,$sql);
    if($result){
        // preusmjerenje na prikaz tablice
        header('location:guitarshop.php');
    }else{
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dodavanje korisnika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Ime i prezime</label>
                <input type="text" class="form-control" placeholder="Unesi ime i prezime" name="ime_prezime" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Unesi email adresu" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Broj telefona</label>
                <input type="number" class="form-control" placeholder="Unesi broj telefona" name="broj_telefona" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Unesi</button>
        </form>
    </div>
</body>

</html>