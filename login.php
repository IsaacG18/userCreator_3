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
               background-color: rgba(255, 255, 255, 0.8);
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
                background-color: rgba(255, 255, 255, 0.7);
                
            }
            input[type=submit]{
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                padding: 5px;
                color:black;
                background-color: #ffffff;
                margin-left: 30px;
                margin-top: 10px;
            }
            label{
                margin-left: 3px;
                color: black;
                min-width: 75px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            #buttonlogin{
                font-size: 20px;
                font-family: sans-serif; 
            }
            input, #buttonSU{
                font-size: 10px;
                font-family: sans-serif;
            }
            
        </style>
        
        
        <div id = "box">
            <h1>Login</h1>
        <form method="POST" action="Check.php">
            
            <label for = "user_name">Username</label>
            <Input type = 'text' Name ='user_name' id = "user_name">
            <label for = "pass">Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <input id="buttonlogin" type="submit" Name = "Check" value="Login">
        </form>
        <form action="SignUp.php">
        <input id="buttonSU" type="submit" Name = "SignUp" value="Create an Account">
        </form>
        </form>
        <form action="SignUp.php">
        <input id="buttonSU" type="submit" Name = "SignUp" value="Create an Account">
        </form>
        </div>
        
       
    </body>
</html>
