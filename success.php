<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" type="text/css" rel="stylesheet"  >

    <title>Document</title>
</head>
<body>

    <?php
     include "db.php";
     $database = new Database();
    
// get the data
     $name = $_REQUEST['firstname'];
     $age = (int)$_REQUEST['age'];
     $gender = $_REQUEST['gender'];
     $house = $_REQUEST['house'];

//insert into database
    $formdata =  $database->insertQuery("INSERT INTO hogwarts (firstname, age, gender, house)
    VALUES ('$name','$age','$gender','$house')");


   if(formdata){
    // echo "<h3>data stored in a database successfully.</h3>"; 

  } else{
    echo "Sorry its an error" ;
      

   };
    ?>
     <div class="form">
    <h2>
        Succsess!
    </h2>
   
    <table>
      <tr>
        <th>firstname</th>
        <th>age</th>
        <th>gender</th>
        <th>house</th>        
      </tr>

   
 <?php
       
       
       $hogwarts =  $database->selectQuery("SELECT * FROM hogwarts");
    
       foreach($hogwarts as $data){
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