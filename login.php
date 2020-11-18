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
            body{
                margin: 0;
                background-image: url("forest.jpg");
                background-repeat: no-repeat;
                background-position: center center;
            }
            #box{
               width: 250px;
               height: 250px;
               border: 5px black solid;
               background-color: rgba(255, 255, 255, 0.5);
               margin: 100px auto;
            }
            h1{
                text-align: center;
                color: black;
                font-family: sans-serif;
            }
            input[type=text], input[type=password]{
                margin-bottom: 20px;
                color: black;
                background-color: rgba(255, 255, 255, 0.5);
            }
            input[type=submit]{
                display: inline;
                 border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                margin-right: 50px;
                color:purple;
                background-color: darkgray;
                float: right;
                
            }
            label{
                margin-left: 3px;
                color: black;
            }
            
        </style>
        
        
        <div id = "box">
            <h1>Login</h1>
        <form method="POST" action="Check.php">
            
            <label for = "user_name">Username</label>
            <Input type = 'text' Name ='user_name' id = "user_name">
            <label for = "pass">Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <input id="button" type="submit" Name = "Check" value="login">
        </form>
        <form action="SignUp.php">
        <input id="button" type="submit" Name = "SignUp" value="SignUp">
        </form>
        </div>
        
       
    </body>
</html>
