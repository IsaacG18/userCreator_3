<?php
            include_once 'dbconnection.php';
            if(isset ($_POST['Check'])){
            $function = $_POST['Check'];
            $user_name = $_POST['user_name'];
            $pass = $_POST['pass'];
            }
            
            $query = $con ->prepare("SELECT * FROM usersv2 WHERE user_name = :user_name");
            $success = $query->execute([
                'user_name' => $user_name
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
           if(isset ($users->user_name) && $users-> Attemps < 3){
               
              if($users->pass == $pass){
                  $attemps = 0;
                   $query = $con->prepare(""
                            . "UPDATE usersv2 SET Attemps = $attemps"
                            . " WHERE user_name = :user_name");
                   
                   $success = $query-> execute([
                        ':user_name' => $user_name
                            ]);
                   
                include_once  'UpLogDel.php';
              }else{
                   echo "Wrong password";
                   $attemps = $users-> Attemps;
                   $attemps = $attemps + 1;
                   $query = $con->prepare(""
                            . "UPDATE usersv2 SET Attemps = $attemps"
                            . " WHERE user_name = :user_name");
                   
                   $success = $query-> execute([
                        ':user_name' => $user_name
                            ]);
              }  
              
            }else{
               echo "Request failed failed";
            }
           
        ?>




