<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<center>
   
    <div class="form_design">
    <h4>
        <?php
        session_start();
        error_reporting(0);
        session_destroy();
        echo  $_SESSION['loginMessage'];
        ?>
    </h4>
        <form action="logincheck.php " method="post">
        

            <div>
                <input div = "label_design" name = "username" type="text" placeholder="Username">
                <input type="password" name = "password" placeholder="Password">
                <input class ="btn btn-primary" type="submit" placeholder="Submit">

                
            </div>
        </form>
    </div>
</center>

</body>
</html>