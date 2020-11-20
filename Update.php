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
               width: 300px;
               height: 225px;
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
                min-width: 105px;
                display: inline;
                float: left;
                font-size: 15px;
                font-family: sans-serif 
            }
            #buttonlogin{
                font-size: 20px;
                font-family: sans-serif; 
            }
        </style>
        <?php
        if(isset($_POST['logged'])){
         $currentUser = $_POST['logged'];
        }
        ?>
        <div id = "box">
        <h1>Update Password</h1>

        <form method="POST" action="Check.php">
            <?php
            echo ("<input name= 'user_name' type='hidden' value='$currentUser'>");
            ?>
            <label for = "pass">Old Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <label for = "NPW">New Password</label>
            <Input type = 'password' Name ='NPW' id = "PW">
            
            <input id="button" type="submit" Name = "Check" value="Update">
        </form>
        </div>
       
    </body>
</html>

