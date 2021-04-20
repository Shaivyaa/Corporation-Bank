<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/Registration.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="shortcut icon" href="../images/favicon.png" type="image/png">
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/36bc9cca65.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -- START -->

  <?php
  include('./components/navbar.php');
  ?>

  <!-- Navbar -- END -->

  <div class="container">
    <h2 id="title">Create a User</h2>
    <form action="./backend/backendCreateUser.php" method="post">
      <div class="form__group">
        <label for="name" class="label">Enter Name:</label>
        <input type="text" name="name" class="input" placeholder="Full Name" required />
      </div>
      <div class="form__group">
        <label for="acc" class="label">Enter Account Number:</label>
        <input type="number" min="100000" max="999999" name="acc" class="input" placeholder="Account Number" required />
      </div>
      <div class="form__group">
        <label for="bal" class="label">Enter Balance:</label>
        <input type="number" min="1" name="bal" class="input" placeholder="Balance" required />
      </div>
      <div class="form__group">
        <button type="submit" class="submit">Submit</button>
      </div>
    </form>
  </div>
  <?php
  include('./components/footer.php');
  ?>
</body>

</html>