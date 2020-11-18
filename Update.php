<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['logged'])){
         $currentUser = $_POST['logged'];
        }
        ?>

        <form method="POST" action="Check.php">
            <?php
            echo ("<input name= 'user_name' type='hidden' value='$currentUser'>");
            ?>
            <label for = "pass">Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <label for = "NPW">New Password</label>
            <Input type = 'password' Name ='NPW' id = "PW">
            
            <input id="button" type="submit" Name = "Check" value="update">
        </form>
       
    </body>
</html>

