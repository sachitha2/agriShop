<?php
// Start the session
session_start();
?>

<?php
    if(isset($_SESSION['username'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logChecker.php" method="POST">
        <input type="text" placeholder="username" value="sam" name="username">

        <br>

        <input type="password" placeholder="enter your password" value="sam" name="pass">

        <br>


        <!-- <input type="password" placeholder="re type your password" value="sam" name="rpass"> -->

        <button type="submit"> Login</button>
    </form>
</body>
</html>