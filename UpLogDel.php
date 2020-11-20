<?php
switch ($function) {
                    case "Login":
                        $logged = $users->user_name;
                        include_once 'index.php';
                        break;
                    
                    case "Delete":
                        if(isset($_POST['RPW'])){
                        $RPW = $_POST['RPW'];
                        }
                        
                    if($RPW == $pass){
                    }
                        $query = $con->prepare(""
                      . "DELETE FROM usersv2"
                      . " WHERE user_name = :user_name");
           
                    $success = $query-> execute([
                        ':user_name' => $user_name
                    ]); 
                    
                    
                    $queryU = $con->prepare(""
                    . "Select * FROM usersv2 WHERE user_name =?"
                    );
                    $queryU -> execute([$user_name]);
                    $users = $queryU->fetch(PDO::FETCH_OBJ);
                    
                        if(!$users){
                           echo "<script language='javascript'>alert('Delete worked')</script>";
                           include_once 'index.php';
                        }else{
                            echo '<script language="javascript">alert("Delete Failed")</script>';
                            $logged = $users->user_name;
                            include_once 'index.php';
                        }
                    
                        break;
                    case "Update":

                        $newPass = $_POST['NPW'];
                         $query = $con->prepare(""
                            . "UPDATE usersv2 SET pass = :pass"
                            . " WHERE user_name = :user_name");

                            $success = $query-> execute([
                           'pass' => $newPass,
                           'user_name' => $user_name
                            ]);
                            
                        $query = $con ->prepare("SELECT * FROM usersv2 WHERE user_name = :user_name");
                        $success = $query->execute([
                            'user_name' => $user_name
                                ]);
                        $users = $query->fetch(PDO::FETCH_OBJ);
               
                    if($users->pass == $newPass){
                        echo '<script language="javascript">alert("Update worked")</script>';
                    }else{
                    echo '<script language="javascript">alert("Failed try again later")</script>';
                    }
                    $logged = $users->user_name;
                    include_once 'index.php';
                            
                            
                            
                    break;
                }
?>

