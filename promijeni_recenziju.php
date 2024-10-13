<?php
include 'spajanje.php';
//Ažuriranje id_recenzije iz URL-a
$id_recenzije = $_GET['updateid_recenzije'];
//Upit koji dohvaća podatke recenzija iz baze
$sql = "select * from `recenzije` where id_recenzije='$id_recenzije'";
//Izvršavanje upita i spremanje rezultata
$result = mysqli_query($con, $sql);
//Dohvaćanje podataka kao asocijativni niz
$row = mysqli_fetch_assoc($result);
//Pridodavanje podataka recenzija varijablama
$proizvodac = $row['proizvodac'];
$model = $row['model'];
$ime_prezime = $row['ime_prezime'];
$ocjena = $row['ocjena'];
$recenzija_text = $row['recenzija_text'];
//Provjera ako je obrazac unesen
if(isset($_POST['submit'])){
    //Dohvaćanje novih podataka recenzija iz obrasca
    $proizvodac = $_POST['proizvodac'];
    $model = $_POST['model'];
    $ime_prezime = $_POST['ime_prezime'];
    $ocjena = $_POST['ocjena'];
    $recenzija_text = $_POST['recenzija_text'];
    
    $sql2 = "select * from korisnik WHERE ime_prezime='$ime_prezime'";
    $result=mysqli_query($con,$sql2);
    $row = mysqli_fetch_assoc($result);
    $id_korisnik = $row['id_korisnik'];
    $sql3 = "select * from gitare WHERE model='$model'";
    $result=mysqli_query($con,$sql3);
    $row = mysqli_fetch_assoc($result);
    $sifra = $row['sifra'];
    //Upit koji ažurira podatke u tablici
    $sql = "update `recenzije` set sifra='$sifra', proizvodac='$proizvodac', model='$model', id_korisnik='$id_korisnik', ime_prezime='$ime_prezime', ocjena='$ocjena', recenzija_text='$recenzija_text' where id_recenzije=$id_recenzije";
    //Izvršavanje upita
    $result=mysqli_query($con,$sql);
    //Provjera
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
    <title>Promjena recenzije</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Proizvođač</label>
                <input type="text" class="form-control" placeholder="Unesi ime proizvođača" name="proizvodac" autocomplete="off" 
                value=<?php echo $proizvodac;?>>
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Unesi naziv modela" name="model" autocomplete="off" 
                value=<?php echo $model;?>>
            </div>
            <div class="form-group">
                <label>Ime i prezime</label>
                <input type="text" class="form-control" placeholder="Unesi ime i prezime korisnika" name="ime_prezime" autocomplete="off" 
                value=<?php echo "'";
                echo $ime_prezime; echo "'" ;?>>
            </div>
            <div class="form-group">
                <label>Ocjena</label>
                <input type="number" class="form-control" placeholder="Unesi ocjenu" name="ocjena" autocomplete="off" 
                value=<?php echo $ocjena;?>>
            </div>
            <div class="form-group">
                <label>Recenzija</label>
                <input type="text" class="form-control" placeholder="Unesi recenziju" name="recenzija_text" autocomplete="off" 
                value=<?php echo "'";
                echo $recenzija_text; echo "'" ;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Unesi</button>
        </form>
    </div>
</body>

</html>