<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transaction</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/transfer.css" type="text/css" />
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

  <div class="container">
    <h2 id="title">Transaction</h2>
    <form action="./backend/backendTransaction.php" method="post">
      <div class="form__group">
        <label for="accountFrom">Transfer From:</label>
        <input type="number" placeholder="Account Number" name="accountFrom" />
      </div>
      <div class="form__group">
        <label for="accountTo">Transfer To :</label>
        <input type="number" placeholder="Account Number" name="accountTo" />
      </div>
      <div class="form__group">
        <label for="amount">Amount :</label>
        <input type="number" placeholder="Amount" name="amount" />
      </div>
      <div class="form__group">
        <button name="submit" type="submit">Transfer</button>
      </div>
    </form>
  </div>
  <?php
  include('./components/footer.php');
  ?>
</body>

</html>