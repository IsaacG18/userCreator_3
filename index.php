<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
            input{
                float: right;
                display: inline;
                 border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                margin-right: 10px;
                color:purple;
                background-color: darkgray;
            }

        </style>
    <?php
        if(isset($logged)){
            echo ("  <form action='Update.php' method='POST'>
                    <input id='button' type='submit' Name = 'CUser' value='Update'>
                    <input name= 'logged' type='hidden' value='$logged'>
                    </form>
                    <form action='Delete.php' method='POST'>
                    <input id='button' type='submit' Name = 'CUser' value='Delete'>
                    <input name= 'logged' type='hidden' value='$logged'>
                    </form>");
        }else{
            echo '  <form action="SignUp.php"  method="POST">
                    <input id="button" type="submit" Name = "SignUp" value="SignUp">
                    </form>
                    <form action="login.php">
                    <input id="button" type="submit" Name = "Login" value="Login">
                    </form> ';
        }

    ?>
        
        
       
    </body>
</html>
