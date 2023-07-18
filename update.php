<?php
session_start();

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
                        <h3>Update DB HERE</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="POST">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">FirstName</label>
                                    <input name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" value="<?php echo $_SESSION["fname"] ?>" 
                                    >
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">LastName</label>
                                    <input name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LastName" value="<?php echo $_SESSION["lname"] ?>" >
                                   
                                </div>
                                

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type" value="<?php echo $_SESSION['phone'] ?>" >
                                   
                                </div>

        
                                <button name="submit" type="submit" class="btn oneMusic-btn mt-30">Update</button>
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

<?php   
    include ('connection.php');
//   echo"hi";
    if(isset($_POST['submit'])){
        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['phone'])){
            echo "please fill all fields";
        }

        else{
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $phone=$_POST['phone'];
            $id=$_SESSION['id'];
        

          
            $sq="UPDATE users set fname='$fname',lname='$lname',phone='$phone' where id='$id'";
            $result=mysqli_query($con,$sq);

            if($result){
                echo "<h1>sucessfull</h1>";
                //session_destroy();
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
      