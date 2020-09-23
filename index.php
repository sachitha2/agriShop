<?php
// Start the session
session_start();
?>

<?php
    if(!isset($_SESSION['username'])){
        header("Location:login.php");
    }
?>

<?php
    include('assets/header.php');
    ?>
    <a href="logout.php"> <button>Logout</button></a>

<?php
    include('assets/footer.php');
?>  