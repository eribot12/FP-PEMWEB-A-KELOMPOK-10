<?php

    $id = $_GET['id'];

    $delcustomer = mysqli_query($connect,"DELETE from id_customer where id_cust = '$id'");
    $delcstmr = mysqli_query($connect,"DELETE from nama_customer where nama_cust = '$id'");
    $delete = mysqli_query($connect,"DELETE from customer where id_cust='$id'");

    if ($delete) {
        header("location:vcustomer.php?msg=delete");
    } else {

     echo "Kode Error : ".mysqli_errno($connect);
     echo "Penjelasan Error :".mysqli_error($connect);
    }


?>