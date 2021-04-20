<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0" />
  <title>Transfer Money</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/transaction_history.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/36bc9cca65.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -- START -->
  
  <?php 
    include('./components/navbar.php');
  ?>

  <!-- Navbar -- END -->

  <div class="cont">
    <h2>Transaction History</h2>
    <table>
      <thead>
        <tr>
          <td>S.NO.</td>
          <td>SENDER</td>
          <td>RECEIVER</td>
          <td>AMOUNT</td>
        </tr>
      </thead>
      <tbody>
        <?php

        include './backend/config.php';

        $sql = "select * from transactions";

        $query = mysqli_query($con, $sql);

        while ($rows = mysqli_fetch_assoc($query)) {
        ?>

          <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['toAcc']; ?></td>
            <td class="py-2"><?php echo $rows['fromAcc']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
          </tr>
          <?php
        }

          ?>

      </tbody>
    </table>
  </div>
  <?php
  include('./components/footer.php');
  ?>
</body>

</html>