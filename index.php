<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Money</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/36bc9cca65.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/index.css" type="text/css" />
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
  <!-- Navbar -- START -->

  <header id="header">
    <a href="./index.php">
      <div class="logo">
        <i class="fa fa-hand-holding-usd"></i>
      </div>
    </a>
    <nav id="nav">
      <ul>
        <li>
          <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li>
          <a class="nav-link" href="./php/Registration.php">Create User</a>
        </li>
        <li>
          <a class="nav-link" href="./php/transfer_money.php">Transfer Money</a>
        </li>
        <li>
          <a class="nav-link" href="./php/transaction_history.php">Transaction History</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Navbar -- END -->

  <!-- HERO SECTION START -->

  <div id="container">
    <div class="hero__logo">
      <i class="fas fa-landmark"></i>
    </div>
    <div class="hero__heading">
      <h3>Welcome to</h3>
      <h2>CORPORATION BANK</h2>
    </div>
  </div>

  <!-- HERO SECTION END -->

  <section id="cont">
    <a href="./php/Registration.php">
      <div class="card">
        <i class="fas fa-user"></i>
        <h4>CREATE A USER</h4>
      </div>
    </a>
    <a href="./php/transfer.php">
      <div class="card">
        <i class="fas fa-wallet"></i>
        <h4>MAKE A TRANSACTION</h4>
      </div>
    </a>
    <a href="./php/transaction_history.php">
      <div class="card">
        <i class="fa fa-file-invoice-dollar"></i>
        <h4>TRANSFER HISTORY</h4>
      </div>
    </a>
  </section>
  <?php
  include('./php/components/footer.php');
  ?>
</body>

</html>