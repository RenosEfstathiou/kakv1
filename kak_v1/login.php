<?php
   require 'dbconnect.php';


    $uname= $_POST['username'];
    $pass = $_POST['password'];

   $sql = "SELECT * FROM users WHERE username=?;";
   $stmt = mysqli_stmt_init($con);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location: index.php?error=sqlError1");
       exit();
   }
   else{
       mysqli_stmt_bind_param($stmt, "s", $uname);
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       if($row = mysqli_fetch_assoc($result)){
           $pwdCheck = ($pass==$row['password']);
           if($pwdCheck== false){
              
           header("Location: index.php?error=wrongPassword");
            exit();
           }
           elseif($pwdCheck== true){
            session_start();
            $_SESSION['username']= $row['username'];

            header("Location: main.html");
            exit();


           }else{
            header("Location: index.php?error=wrongPassword");
            exit();
           }


        }
       else{
        header("Location: index.php?error=noUser");
        exit();
       }

   }
?>
