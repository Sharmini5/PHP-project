<?php
    session_start();
    if (isset($_POST["submit"])) {
        $UN = $_POST["username"];
        $Pwd = $_POST["password"];
		$get=$_POST["User_Type"];
		
		$con = mysqli_connect("localhost", "root", "", "company maintenance system");
        mysqli_select_db($con, "company maintenance system");

        
        
        if($get=='Admin'){

        $Q2 = "SELECT * FROM `login` WHERE `User_Name` = '$UN' and `Password` = '$Pwd' and User_Type = '$get'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              
              $_SESSION['User_Name']=$row['username'];
                $_SESSION['Password']=$row['password'];
                

                header("location:./administrator.php");
              

              
        } 
		else {
            echo "Invalid user name and password";
        }
        }
    elseif($get=='Employee'){

        $Q2 = "SELECT * FROM `login` WHERE `User_Name` = '$UN' and `Password` = '$Pwd' and User_Type = '$get'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              
              $_SESSION['User_Name']=$row['username'];
                $_SESSION['Password']=$row['password'];
                

                header("location:./employee.php");
              

              
        } 
    else {
            echo "Invalid user name and password";
        }
        }
		elseif($get=='Client'){

        $Q2 = "SELECT * FROM `login` WHERE `User_Name` = '$UN' and `Password` = '$Pwd' and User_Type = '$get'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              
              $_SESSION['User_Name']=$row['username'];
                $_SESSION['Password']=$row['password'];
                

                header("location:./client.php");
              

              
        } 
    else {
            echo "Invalid user name and password";
        }
        }

    }
    ?>