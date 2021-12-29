<?php

    $id = $_GET['id'];

    $delsupplier = mysqli_query($connect,"DELETE from id_supplier where id_supplier = '$id'");
    $delsupplier = mysqli_query($connect,"DELETE from nama_supplier where nama_supplier = '$id'");
    $delete = mysqli_query($connect,"DELETE from supplier where id_supplier='$id'");

    if ($delete) {
        header("location:vsupplier.php?msg=dsuppliere");
    } else {

     echo "Kode Error : ".mysqli_errno($connect);
     echo "Penjelasan Error :".mysqli_error($connect);
    }


?>