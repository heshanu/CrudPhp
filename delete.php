<?php
session_start();

?>

<?php   
    include ('connection.php');
    if(isset($_POST['submit'])){
        if(empty($_POST['phone'])){
            echo "please fill all fields";
        }

        else{
            $phone=$_POST['phone'];
             $sq="delete from users where phone='".$phone."'";  
            $result=mysqli_query($con,$sq);

            if($result){
                echo "<h1>sucessfull deleted</h1>";
                
               $_SESSION['id']="";   
               $_SESSION['fname']="";
               $_SESSION['lname']="";
               $_SESSION['phone']="";

            }
            else{
                echo "<h1> flaid to connect!</h1> ";
            }
            
        }           
    } 
       
?>
   
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<h1>Update</h1>
 <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Delete</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form method="POST" action="delete.php">
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <tr>
                    
                         <th>FirstName</th>
                          <th>LastName</th>
                           <th>Phone</th>
                          
                           
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
                

         $_SESSION["id"]=$row[0];
          $_SESSION["fname"]=$row[1];
           $_SESSION["lname"]=$row[2];
            $_SESSION["phone"]=$row[3];   
?>
                        
                        <td>
                            <?php echo $fname ?>
                        </td>
                        <td>
                            <?php echo $lname ?>
                        </td>
                        <td>
                            <?php echo $phone ?>
                        </td>
                        
                       
                    </tr>
<?php
}
}
?>
                </table>
                            <form action="delete.php" method="POST">
                                                
                                

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">User Phone</label>
                                    <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter phone"  >
                                   
                                </div>

        
                                <button name="submit" type="submit" class="btn oneMusic-btn mt-30">Delete</button>
                                <button name="reset" type="reset" class="btn oneMusic-btn mt-30"><a href="index.php">Back</a>
        
                             </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

   