<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

 <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Insert Data</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="POST">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">FirstName</label>
                                    <input name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"  
                                    >
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">LastName</label>
                                    <input name="lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="LastName"  >
                                   
                                </div>
                                

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type" >
                                   
                                </div>

        
                                <button name="submit" type="submit" class="btn oneMusic-btn mt-30">Insert Data</button>
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
            
        

          
              
              
            
            $sq="INSERT INTO users(fname,lname,phone) VALUES ('$fname','$lname','$phone')";  
            $result=mysqli_query($con,$sq);

            if($result){
                echo "<h1>sucessfull</h1>";
                //session_destroy();
                
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
      