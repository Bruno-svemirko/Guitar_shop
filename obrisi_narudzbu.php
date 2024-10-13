<?php
include 'spajanje.php';
if (isset($_GET['deleteid_narudzbe'])){
    $id_narudzbe = $_GET['deleteid_narudzbe'];

    $sql = "delete from `narudzbe` where id_narudzbe=$id_narudzbe";
    $result = mysqli_query($con, $sql);
    if($result){
        // preusmjeravanje na tablicu
        header('location:guitarshop.php');
    }else{
        die(mysqli_error($con));
    }
}

?>