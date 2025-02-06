<?php 
    session_start(); 
    include 'condb.php';
    /*$id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image:url(img/bg.jpg)">
    <?php include 'navbar.php'?><br><br><br><br>
    
    <!--<div style="background-image: url(img/bg.jpg)";>-->
    <div class="container">
        <form id="form1" method="POST" action="insert_cart.php">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">

                        <div class="alert alert-dark h3" role="alert">
                            การสั่งซื้อสินค้า
                        </div>
                        <div class="card-body">
                            <table class="table table-based">
                                <tr>
                                    <th>ลำดับที่</th>
                                    <th class="text-center">ชื่อสินค้า</th>
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    <th>ราคารวม</th>
                                    <th>เพิ่ม - ลด</th>
                                    <th>ลบ</th>
                                </tr>
                                <?php
                                    $total = 0;
                                    $sumPrice = 0;
                                    $m = 1;
                                    $sumTotal = 0;

                                    if(isset($_SESSION["intLine"])){

                                        for ($i = 0 ; $i <= (int)$_SESSION["intLine"] ; $i++){
                                            if (($_SESSION["strProductID"][$i]) != ""){
                                                $sql = "SELECT * FROM product WHERE id = '" . $_SESSION["strProductID"][$i] . "' ";
                                                $result1 = mysqli_query($conn, $sql);
                                                $row_pro = mysqli_fetch_array($result1);
                                    
                                                $_SESSION["price"] = $row_pro['price'];
                                                $total = $_SESSION["strQty"][$i];
                                                $sum = $total * $row_pro['price'];
                                                $sumPrice = $sumPrice += $sum;
                                                $_SESSION["sum_price"] = $sumPrice;
                                                $sumTotal = $sumTotal + $total
                                ?>
                                <tr>
                                    <td><?=$m?></td>
                                    <td style="font-size: 20px;">
                                        <img src="img/<?=$row_pro['image']?>" width="150px">
                                        <?=$row_pro['name']?>
                                    </td>
                                    <td><?=$row_pro['price']?></td>
                                    <td><?=$_SESSION["strQty"][$i]?></td>
                                    <td><?=$sum?></td>

                                    <td>
                                        <a href="order.php?id=<?=$row_pro['id']?>"><button type="button" class="btn btn-success">+</button></a>
                                        <?php if($_SESSION["strQty"][$i] > 1){ ?>
                                            <a href="order_del.php?id=<?=$row_pro['id']?>"><button type="button" class="btn btn-danger">-</button></a>
                                        <?php } ?>
                                    </td>

                                    <td>
                                        <a href="pro_delete.php?Line=<?=$i?>">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    $m = $m+1;
                                        }
                                    } 
                                }
                                ?>
                                <tr>
                                    <td class="text-end" colspan="4">รวมเป็นเงิน</td>
                                    <td class="text-center"><?=$sumPrice?></td>
                                    <td>บาท</td>
                                </tr>
                            </table>
                            <p class="text-end">จำนวนสินค้าที่สั่งซื้อ <?=$sumTotal?> แก้ว</p>
                            <div style="text-align: right;">
                                <a href="product.php"><button type="button" class="btn btn-outline-secondary">เลือกสินค้า</button></a> 
                                <button type="submit" class="btn btn-outline-danger">ยืนยันคำสั่งซื้อ</button>
                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="alert alert-dark h4" role="alert">
                            ข้อมูลสำหรับจัดส่งสินค้า
                        </div>
                            <div class="card-body">
                                ชื่อ-นามสกุล:
                            <input type="text" name="cus_name" class="form-control mt-1 mb-3" required placeholder="ชื่อ-นามสกุล ...">
                                ที่อยู่จัดส่งสินค้า:
                            <textarea class="form-control mt-1 mb-3" required placeholder="ที่อยู่ ..." name="cus_add" rews="3"></textarea>
                                เบอร์โทรศัพท์:
                            <input type="number" name="cus_tel" class="form-control mt-1 mb-3" required placeholder="เบอร์โทรศัพท์ ...">
                        </div>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </form>
    </div>
    </div>
    <section>
        <footer style="
            position: sticky;
            bottom: 0;
            width: 100%;
            background-color: #333;
            margin-top: 20px;
            padding-top: 37px;
            color: white;
            text-align: center;
            height: 180px;
        ">
            <p>ติดต่อ : 099 771 3327</p>
            <p>เวลาทำการ | ทุกวัน เวลา 09:00-18:00</p>
            <p>&copy;Copyright 2024. Chama ชามะ. ทุกสิทธิ์ถูกสงวน.</p>
        </footer>
    </section>
    </div>
</body>
</html>