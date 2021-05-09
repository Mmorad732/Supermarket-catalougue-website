
   <?php
    
    
    
    $email = $_POST["SIemail"];
    $password = $_POST["SIpassword"];

    include "db_connection.php";
    
    if( !empty($_POST["SIemail"]) && !empty($_POST["SIpassword"])){
        $checkquery = " select first_name,last_name , email,password from Users where email = ? ";
        $statement = mysqli_prepare($con, $checkquery);
        mysqli_stmt_bind_param($statement,'s',$email);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        $rowCount = mysqli_stmt_num_rows($statement);
        if ( $rowCount === 1) {
            mysqli_stmt_bind_result($statement,$firstname,$lastname,$retEmail,$retPassword);
            mysqli_stmt_fetch($statement);
            if(password_verify($password , $retPassword)){
             session_start();
             $_SESSION["loggeduser"] = $firstname ." ".$lastname;
             header("Location:index.php");
                
            }
            else{
            header("Location:Register.php?error=Invalid Email or password");
            exit();
        
            }
        }else{
           header("Location:Register.php?error=Account doesn't exist");
        }
       
    }else{
        
        header("Location:Register.php?error=Fill all feilds");
        exit();
        
    }
    ?>

