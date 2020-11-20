<?php
    include_once 'dbconnection.php';
    $FN = $_POST['FN'];
    $LN = $_POST['LN'];
    $UN = $_POST['UN'];
    $EM = $_POST['EM'];
    $PW = $_POST['PW'];
    
            $queryU = $con->prepare(""
                    . "Select * FROM usersv2 WHERE user_name =?"
                    );
            $queryU -> execute([$UN]);
            $usersU = $queryU->fetch(PDO::FETCH_OBJ);
            
            $queryE = $con->prepare(""
                    . "Select * FROM usersv2 WHERE email =?"
                    );
            $queryE -> execute([$EM]);
            $usersE = $queryE->fetch(PDO::FETCH_OBJ);
            
            if(!$usersU and !$usersE){
          echo'Username and Email are free <br>';
           $query = $con->prepare(""
                . "INSERT INTO usersv2(first_name, last_name, user_name,email, pass, Attemps)"
                . " VALUES (:first_name, :last_name, :user_name, :email, :pass, 0)");
           
           $success = $query-> execute([
                'first_name' => $FN,
                'last_name' => $LN,
                'user_name' => $UN,
                'email' => $EM,
                'pass' => $PW,
           ]);
           $user_id = $con -> lastInsertId();
           echo $user_id;
            }else{
               echo '<br>Username or Email is already taken';
               echo '<form action="SignUp.php">
                    <input id="button" type="submit" Name = "login" value="Sign Up">
                    </form>';
           }   
                  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account create</title>
    </head>
</html>>