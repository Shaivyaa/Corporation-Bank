<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transfer Money</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/transfer_money.css" type="text/css" />
  <script src="https://kit.fontawesome.com/36bc9cca65.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
  <!-- Navbar -- START -->

  <?php
  include('./components/navbar.php');
  ?>

  <!-- Navbar -- END -->

  <div class="cont">
    <h2>Transfer Money</h2>
    <table>
      <thead>
        <tr>
          <td>ID</td>
          <td>NAME</td>
          <td>ACCOUNT NUMBER</td>
          <td>BALANCE</td>
          <td>OPERATION</td>
        </tr>
      </thead>
      <tbody>
        <?php

        include './backend/config.php';

        $sql = "select * from users";

        $query = mysqli_query($con, $sql);

        while ($rows = mysqli_fetch_assoc($query)) {
        ?>

          <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['accountNo']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><a href="./transfer.php">Transfer Money</a></td>
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