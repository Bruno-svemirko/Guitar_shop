<?php
include 'spajanje.php';
if (isset($_GET['deleteid_korisnik'])){
    $id_korisnik = $_GET['deleteid_korisnik'];

    $sql = "delete from `korisnik` where id_korisnik=$id_korisnik";
    $result = mysqli_query($con, $sql);
    if($result){
        // preusmjeravanje na tablicu
        header('location:guitarshop.php');
    }else{
        die(mysqli_error($con));
    }
}

?>