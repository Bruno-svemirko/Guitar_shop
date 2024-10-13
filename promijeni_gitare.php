<?php
include 'spajanje.php';
$sifra = $_GET['updatesifra'];
$sql = "select * from `gitare` where sifra='$sifra'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$proizvodac = $row['proizvodac'];
$model = $row['model'];
$cijena = $row['cijena'];
$kolicina = $row['kolicina'];

if(isset($_POST['submit'])){
    $proizvodac = $_POST['proizvodac'];
    $model = $_POST['model'];
    $cijena = $_POST['cijena'];
    $kolicina = $_POST['kolicina'];

    $sql = "update `gitare` set sifra='$sifra', proizvodac='$proizvodac', model='$model', cijena='$cijena', kolicina='$kolicina' where sifra=$sifra";
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
    <title>Promjena gitare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Proizvođač</label>
                <input type="text" class="form-control" placeholder="Unesi ime proizvođača" name="proizvodac" autocomplete="off" value=<?php echo $proizvodac;?>>
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Unesi naziv modela" name="model" autocomplete="off" value=<?php echo $model;?>>
            </div>
            <div class="form-group">
                <label>Cijena</label>
                <input type="number" class="form-control" placeholder="Unesi cijenu" name="cijena" autocomplete="off" value=<?php echo $cijena;?>>
            </div>
            <div class="form-group">
                <label>Količina</label>
                <input type="number" class="form-control" placeholder="Unesi količinu" name="kolicina" autocomplete="off" value=<?php echo $kolicina;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Promijeni</button>
        </form>
    </div>
</body>

</html>