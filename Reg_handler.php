
<?php
    
    
    $firstName = $_POST["SUfn"];
    $lastName = $_POST["SUln"];
    $email = $_POST["SUemail"];
    $password = $_POST["SUpassword"];
    $repass = $_POST["SUrepassword"];
    include "db_connection.php";
    
    if( !empty($_POST["SUfn"]) && !empty($_POST["SUln"])
       && !empty($_POST["SUemail"]) && !empty($_POST["SUpassword"])
       && !empty($_POST["SUrepassword"])){
        $checkquery = " select first_name,last_name , email,password from Users where email = ? ";
        $statement = mysqli_prepare($con, $checkquery);
        mysqli_stmt_bind_param($statement,'s',$email);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        $rowCount = mysqli_stmt_num_rows($statement);
        if ( $rowCount === 1) {
            header("Location:Register.php?error=Email already exists");
            mysqli_free_result($result);
            exit();
        }
        if($password == $repass ){
        $passwordhashed =  password_hash($password,PASSWORD_DEFAULT);
        $insertUser = "INSERT INTO Users(first_name,last_name,email,password)
             values(?,?,?,?)";
            $statement = mysqli_prepare($con , $insertUser);
            mysqli_stmt_bind_param($statement,'ssss',$firstName,$lastName,$email,$passwordhashed);
        $result = mysqli_stmt_execute($statement);
            if($result){
                header("Location:Register.php");
                mysqli_free_result($result);
            }
            else {
                header("Location:Register.php?error=Error:".mysqli_stmt_error($statement));
                mysqli_free_result($result);
                
            }
        
        }
        else{
           header("Location:Register.php?error=Password doesn't match");
        }
    }else{
        
        header("Location:Register.php?error=Fill all feilds");
        exit();
        
    }
    ?>




