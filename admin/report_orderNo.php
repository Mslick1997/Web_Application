<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Manager</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
        <?php include 'admenu.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">รายงานการสั่งซื้อสินค้า</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">รายงานการสั่งซื้อสินค้า</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                แสดงข้อมูลการสั่งซื้อสินค้า (ยังไม่ได้ชำระเงิน)
                                <div class="mt-3 mb-2">
                                    <a href="report_orderYes.php"><button type="button" class="btn btn-outline-success">ชำระเงินแล้ว</button></a>
                                    <a href="report_orderNo.php"><button type="button" class="btn btn-outline-danger">ยังไม่ชำระเงิน</button></a>
                                    <a href="report_orderCancel.php"><button type="button" class="btn btn-outline-secondary">ยกเลิกการสั่งซื้อ</button></a>
                                </div>
                            </div>

                            <div class="mt-3">
                                <form name="form1" method="POST" action="report_order.php">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <input type="date" name="dt1" class="form-control">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="date" name="dt2" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>เลขที่ใบคำสั่งซื้อ</th>
                                            <th>ลูกค้า</th>
                                            <th>ที่อยู่จัดส่งสินค้า</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>ราคารวมสุทธิ</th>
                                            <th>วันที่สั่งซื้อ</th>
                                            <th>สถานะการสั่งซื้อ</th>
                                            <th>ปรับสถานะ</th>
                                            <th>ยกเลิกคำสั่งซื้อ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>orderID</th>
                                            <th>cus_name</th>
                                            <th>address</th>
                                            <th>tel</th>
                                            <th>reg_date</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                    <?php
                                        $ddt1=@$_POST['dt1'];
                                        $ddt2=@$_POST['dt2'];
                                        $add_data=date('Y/m/d', strtotime($ddt2 . "+1 days"));

                                        if (($ddt1 != "") & ($ddt2 != "")){
                                            echo "ค้นหาจากวันที่ $ddt1 ถึง $ddt2 ";
                                            $sql = "SELECT * FROM tb_order WHERE order_status='1' AND reg_date BETWEEN '$ddt1' AND '$ddt2' 
                                            ORDER BY reg_date DESC";
                                        }else {
                                            $sql = "SELECT * FROM tb_order WHERE order_status='1' ORDER BY reg_date DESC";                                        
                                        }
                                        
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)){
                                        $status = $row['order_status'];


                                    ?>
                                        <tr>
                                            <td><?=$row['orderID']?></td>
                                            <td><?=$row['cus_name']?></td>
                                            <td><?=$row['address']?></td>
                                            <td><?=$row['tel']?></td>
                                            <td><?=$row['total_price']?> บาท</td>
                                            <td><?=$row['reg_date']?></td>
                                            <td>

                                            <?php
                                            
                                            if($status == 1){
                                                echo "<b style='color: rgb(255, 157, 0);'>ยังไม่ชำระเงิน</b><br>";
                                                echo "<b style='color: grey;'>ยังไม่เสิร์ฟ</b>";
                                                
                                            }if($status == 2){
                                                echo "<b style='color: green'>ชำระเงินแล้ว</b><br>";
                                                echo "<b style='color: grey;'>เสิร์ฟแล้ว</b>";
                                                
                                            }if($status == 0){
                                                echo "<b style='color: red;'>ยกเลิกการสั่งซื้อ</b><br>";
                                                
                                            }
                                            ?>
                                            
                                            </td>
                                            <td><a href="change_order.php?id=<?=$row['orderID']?>" class="btn btn-warning"
                                            onclick="del1(this.href); return false;">ปรับสถานะ</a></td>
                                            <td><a href="cancel_order.php?id=<?=$row['orderID']?>" class="btn btn-danger"
                                            onclick="del(this.href); return false;">ยกเลิก</a></td>
                                        </tr>
                                        
                                    <?php }
                                        mysqli_close($conn);
                                    ?>
                                    </tbody>    

                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
                <?php include 'adfooter.php' ?>

            </div>
        </div>
    </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script>
    function del(mypage){
        var agree = confirm('คุณต้องการยกเลิกใบคำสั่งซื้อสินค้ารือไม่?');
        if(agree){
            window.location=mypage;
        }
    }
    function del1(mypage){
        var agree = confirm('คุณต้องการปรับสถานะการชำระเงินหรือไม่?');
        if(agree){
            window.location=mypage;
        }
    }
    function del2(mypage){
        var agree = confirm('คุณต้องการปรับสถานะการเสิร์ฟหรือไม่?');
        if(agree){
            window.location=mypage;
        }
    }
</script>