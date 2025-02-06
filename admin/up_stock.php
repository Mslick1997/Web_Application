<?php
    include 'condb.php';
    $ids=$_POST['pid'];
    $nums=$_POST['pnum'];

    $sql="UPDATE product SET amount = amount + $nums WHERE id = '$ids' ";
    $hand=mysqli_query($conn, $sql);
    if($hand){
        echo "<script> alert('อัปเดตจำนวนสินค้าเรียบร้อย'); </script>";
        echo "<script> window.location='index.php'; </script>";
    }else {
        echo "<script> alert('ไม่สามารถอัปเดตจำนวนสินค้าได้'); </script>";
    }
    mysqli_close($conn);
?>