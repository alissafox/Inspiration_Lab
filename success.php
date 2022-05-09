<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/style.css" type="text/css" rel="stylesheet">

  <title>Document</title>
</head>

<body>

  <?php
  include "db.php";
  $database = new Database();

  // get the data
  $name = $_REQUEST['first_name'];
  $last_name = $_REQUEST['last_name'];
  $dateOfBirth = $_REQUEST['dateOfBirth'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];



  echo $name, $last_name;

  print $name;
  //insert into database
  $formdata = $database->insertQuery("INSERT INTO `user`( `first_name`, `last_name`, `dateOfBirth`, `email`, `password`) VALUES ($name, $last_name, $dateOfBirth,  $email ,  $password)");



  if ($formdata) {
    echo "<h3>data stored in a database successfully.</h3>";
  } else {
    echo "Sorry its an error";
  };
  ?>

  <?php


  $hogwarts =  $database->selectQuery("SELECT * FROM hogwarts");

  foreach ($hogwarts as $data) {
  ?>
    <tr>
      <td><?php echo $data['firstname']; ?></td>
      <td><?php echo $data['age']; ?></td>
      <td><?php echo $data['gender']; ?></td>
      <td><?php echo $data['house']; ?></td>

    </tr>
  <?php
  }
  ?>

  </table>
  </div>
</body>

</html>