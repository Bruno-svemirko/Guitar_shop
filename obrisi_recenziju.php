<?php
include 'spajanje.php';
if (isset($_GET['deleteid_recenzije'])){
    $id_recenzije = $_GET['deleteid_recenzije'];
    //Upit za brisanje
    $sql = "delete from `recenzije` where id_recenzije=$id_recenzije";
    //Izvršavanje
    $result = mysqli_query($con, $sql);
    //Provjera
    if($result){
        // preusmjeravanje na tablicu
        header('location:guitarshop.php');
    }else{
        die(mysqli_error($con));
    }
}

?>