<?php include 'condbENG.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAMA</title>

      <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles2.css">
    <style>
      @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-3px); }
        100% { transform: translateX(3px); }
      }
    </style>
</head>
<body style="background-image: url(img/bg.jpg);">
    <?php include 'navbarENG.php'?>
    
      <div class="container">
        <br><br>
        <div class="row">
          <div style="
            padding-top: 50px;
            animation: shake 0.5s ease-in-out infinite;
            ">
            <p style="
              display: inline-block;
              font-size: 60px;
              font-family: Sriracha;
              font-weight: 600;
              color: #e5965d;
              background-color: #fff;
              border-radius: 50%;
              border: 2px solid #e5965d;
            ">PRODUCT LIST</p>
          </div>
          <?php
            $sql = "SELECT * FROM product WHERE amount > 0 ORDER BY id";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result)){
          ?>
          <div class="col-md-3" style="
            padding-top: 30px;
          ">
              <div class="text-center" style="
                
                background-color: #ffffff;
                padding: 50px;
                border-radius: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
              ">
                <img src="img/<?=$row['image']?>" style="
                  width: 90%;
                  filter: drop-shadow(0 1px 10px rgba(31, 31, 31, 0.6));
                ">
                <h5 class="mt-4"><?=$row['name']?></h5>
                Price <b class="text-danger"><?=$row['price']?></b> baht <br>
                <a class="btn btn-outline-success mt-3" href="product_detailENG.php?id=<?=$row['id']?>">Detail</a>
              </div>
          </div>
          <?php } mysqli_close($conn)?>
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
            <p>Tel : 099 771 3327</p>
            <p>Open time | Everyday since 09:00-18:00</p>
            <p>&copy;Copyright 2024. Chama ชามะ. All rights reserved.</p>
        </footer>
    </section>
</body>
</html>