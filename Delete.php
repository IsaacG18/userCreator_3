<!DOCTYPE html>

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
            echo ("<input name= 'currentUser' type='hidden' value='$currentUser'>");
            ?>
            <label for = "user_name">Username</label>
            <Input type = 'text' Name ='user_name' id = "user_name">
            <label for = "pass">Password</label>
            <Input type = 'password' Name ='pass' id = "PW">
            <input id="button" type="submit" Name = "Check" value="delete">
        </form>
       
    </body>
</html>
