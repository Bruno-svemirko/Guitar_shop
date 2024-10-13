<?php
include 'spajanje.php';
if(isset($_POST['submit'])){
    $proizvodac = $_POST['proizvodac'];
    $model = $_POST['model'];
    $cijena = $_POST['cijena'];
    $kolicina = $_POST['kolicina'];

    $sql="insert into `gitare` (proizvodac,model,cijena,kolicina)
    values ('$proizvodac','$model','$cijena','$kolicina')";
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
    <title>Dodavanje gitare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Proizvođač</label>
                <input type="text" class="form-control" placeholder="Unesi ime proizvođača" name="proizvodac" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Unesi naziv modela" name="model" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Cijena</label>
                <input type="number" class="form-control" placeholder="Unesi cijenu" name="cijena" autocomplete="off">
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