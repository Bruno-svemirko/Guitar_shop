<?php
include 'spajanje.php';
if(isset($_POST['submit'])){
    $ime_prezime = $_POST['ime_prezime'];
    $proizvodac = $_POST['proizvodac'];
    $model = $_POST['model'];
    $kolicina = $_POST['kolicina'];

    $sql2 = "select * from korisnik WHERE ime_prezime='$ime_prezime'";
    $result=mysqli_query($con,$sql2);
    $row = mysqli_fetch_assoc($result);
    $id_korisnik = $row['id_korisnik'];
    $sql3 = "select * from gitare WHERE model='$model'";
    $result=mysqli_query($con,$sql3);
    $row = mysqli_fetch_assoc($result);
    $sifra = $row['sifra'];
    $sql="insert into `narudzbe` (id_korisnik,ime_prezime,sifra,proizvodac,model,kolicina) 
    values ('$id_korisnik','$ime_prezime','$sifra','$proizvodac','$model','$kolicina')";
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
    <title>Dodavanje narudžbe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Ime i prezime</label>
                <input type="text" class="form-control" placeholder="Unesi ime i prezime korisnika" name="ime_prezime" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Proizvođač</label>
                <input type="text" class="form-control" placeholder="Unesi ime proizvođača" name="proizvodac" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Unesi naziv modela" name="model" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Količina</label>
                <input type="number" class="form-control" placeholder="Unesi količinu" name="kolicina" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Unesi</button>
        </form>
    </div>
</body>

</html>