<?php


include 'config.php';
// database connection code
if ($_POST['accountFrom']) {
  // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
  // get the post records
  $toAcc = $_POST['accountTo'];
  $fromAcc = $_POST['accountFrom'];
  $amount = $_POST['amount'];

  $sql = "SELECT * from users where accountNo = $fromAcc";
  $query = mysqli_query($con, $sql); // object(rows)
  $sql1 = mysqli_fetch_array($query); // [[1, "Test Name", 454545, 10], [...], [...]]

  $sql = "SELECT * from users where accountNo = $toAcc";
  $query = mysqli_query($con, $sql);
  $sql2 = mysqli_fetch_array($query);


  if (($amount) < 0) {
    echo '<script> 
            alert("Oops! Negative values cannot be transferred");
            window.location="../transfer.php";
          </script>';
  } else if ($toAcc == $fromAcc) {
    echo '<script> 
            alert("Oops! Both account number can\'t be same ");
            window.location="../transfer.php";
          </script>';
  } else if ($amount > $sql1['balance']) {
    echo '<script> 
            alert("Bad Luck! Insufficient Balance");
            window.location="../transfer.php";
          </script>';
  } else if ($amount == 0) {
    echo '<script> 
            alert("Oops! Zero value cannot be transferred");
            window.location="../transfer.php";
          </script>';
  } else {
    $newbalance = (integer) $sql1['balance'] - (integer) $amount;
    $sql = "UPDATE users set balance = $newbalance where accountNo= $fromAcc";
    mysqli_query($con, $sql);

    $newbalance = (integer) $sql2['balance'] + (integer) $amount;
    $sql = "UPDATE users set balance = $newbalance where accountNo = $toAcc";
    mysqli_query($con, $sql);

    $sender = $sql1['name'];
    $receiver = $sql2['name'];
    $sql = "INSERT INTO transactions(toAcc, fromAcc, amount) VALUES('$sender', '$receiver', '$amount')";
    $query = mysqli_query($con, $sql);
    if ($query) {
      echo '<script>
              alert("Transaction Succeeded");
              window.location="../transaction_history.php";
            </script>';
    } else {
      echo '<script>
              alert("ERROR! Unable to update the database!");
              window.location="../transfer.php";
            </script>';
    }

    $newbalance = 0;
    $amount = 0;
  }


  // insert in database 
} else {
  echo "<script>
          alert('Are you a genuine visitor?');
          window.location='../tranfer.php';
        </script>";
}
