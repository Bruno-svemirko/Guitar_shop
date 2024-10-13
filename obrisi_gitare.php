<?php
include 'spajanje.php';
if (isset($_GET['deletesifra'])){
    $sifra = $_GET['deletesifra'];

    $sql = "delete from `gitare` where sifra=$sifra";
    $result = mysqli_query($con, $sql);
    if($result){
        // preusmjeravanje na tablicu
        header('location:guitarshop.php');
    }else{
        die(mysqli_error($con));
    }
}

?>