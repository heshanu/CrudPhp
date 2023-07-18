




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    
 

 <h1>Crud Operation</h1>  


<form method="POST" action="index.php">
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <tr>
                        <th>ID</th>
                         <th>FirstName</th>
                          <th>LastName</th>
                           <th>Phone</th>
                           <th>Action</th>
                           
                    </tr>

                    <tr>
                            <?php

require "connection.php";
$query="select * from users";
$result=mysqli_query($con,$query);
if($result){
    while($row=mysqli_fetch_array($result)){
        // echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]."<a href='update.php'>Update</a>"."<br/>";
         $fname = $row['fname'];
            $lname = $row['lname'];
                 $phone = $row['phone'];
                 $id=$row['id'];

         $_SESSION["id"]=$row[0];
          $_SESSION["fname"]=$row[1];
           $_SESSION["lname"]=$row[2];
            $_SESSION["phone"]=$row[3];   
?>
                        <td>
                            <?php echo $id ?>
                        </td>
                        <td>
                            <?php echo $fname ?>
                        </td>
                        <td>
                            <?php echo $lname ?>
                        </td>
                        <td>
                            <?php echo $phone ?>
                        </td>
                        <td>
                           <button> <a href="update.php">Update</a></button>
                             <button type="submit" name="delete"><a href="delete.php">Delete</a> </button>
                           <!--  <a href="delete.php">Delete</a> --> 
                        </td>
                       
                    </tr>
<?php
}
}
?>
                </table>
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <button><a href="insertData.php">Insert Data</a></button>
                    </div>
                </div>
            </form>
            </div>
        </div>


    </section>
  
    </footer>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    
    <script src="js/bootstrap/popper.min.js"></script>
       <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <script src="js/plugins/plugins.js"></script>
      <script src="js/active.js"></script>
</body>
</html>



 
      