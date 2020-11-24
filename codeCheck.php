<?php
            include_once 'dbconnection.php';
            if(isset ($_POST['Check'])){
            $code= $_POST['code'];
            $pass = $_POST['pass'];
            }
            
            $query = $con ->prepare("SELECT * FROM usersv2 WHERE CODE = :code");
            $success = $query->execute([
                'code' => $code
                    ]);
            $users = $query->fetch(PDO::FETCH_OBJ);
            
            
           if(isset ($users->CODE) && $code != null){
               
            
                  $attemps = 0;
                   $query = $con->prepare(""
                            . "UPDATE usersv2 SET Attemps = :attemps, pass = :pass, CODE = :code1"
                            . " WHERE CODE = :code");
                   
                   $success = $query-> execute([
                       ':pass' => $pass,
                       ':attemps' => $attemps,
                       ':code1' => null,
                       ':code' => $code
                            ]);
                            include_once 'index.php';
                   
                   
                
            }else{
               echo "Request failed";
            }
           
        ?>