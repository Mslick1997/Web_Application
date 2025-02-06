<?php include 'condb.php'?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image: url(img/bg.jpg);">
  <?php include 'navbar.php'?>

  <br><br><br>
  <div class="container">
    <div class="row mt-5" style="
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      padding: 10px;
    ">
      <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM product p WHERE p.id = '$id' ORDER BY id";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);  
      ?>
      <div class="col-md-6 text-center">
        <img src="img/<?=$row['image']?>" width="500px" class="mt-3 p-3 my-4">
      </div>
      <div class="col-md-5"> <br><br><br>
        <h2 class="text-success"><?=$row['name']?></h2>
        ID: <?=$row['id']?> <br>
        รายละเอียด : <?=$row['detail']?> <br><br>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
          <label class="btn btn-outline-success" for="btnradio1">ไม่ใส่น้ำตาล</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-success" for="btnradio2">หวานน้อย</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked>
          <label class="btn btn-outline-success" for="btnradio3">หวานพอดี</label>
        
          <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
          <label class="btn btn-outline-success" for="btnradio4">หวานมาก</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
          <label class="btn btn-outline-success" for="btnradio5">หวานสามโลก</label>

        </div><br>

        <div class="btn-group mt-2" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio1" id="btnradio6" autocomplete="off" checked>
          <label class="btn btn-outline-danger" for="btnradio6">S</label>

          <input type="radio" class="btn-check" name="btnradio1" id="btnradio7" autocomplete="on">
          <label class="btn btn-outline-danger" for="btnradio7">M</label>

        </div><br>
        
        <div class="form-check form-switch mt-3">
          <input style="width: 55px; height: 25px;" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label style="font-size: 22px; color: #808080;" class="form-check-label" for="flexSwitchCheckDefault">&nbsp;&nbsp;ใส่ไข่มุก</label>
        </div>
        <h2 class="text-danger mt-3">฿<?=$row['price']?><br>
        <a class="btn btn-outline-success mt-3" href="order.php?id=<?=$row['id']?>" style="font-size: 20px;">เพิ่มลงตะกร้า</a>
      </div>
    </div>
    <br><br>
  </div>


<?php mysqli_close($conn);?>
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
</body>
</html>