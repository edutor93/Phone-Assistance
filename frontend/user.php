<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="text/html">
        <title>User Page</title>
        <script src="./js/index.js"></script>
        </head>
        <?php
        session_start();
        if(isset($_SESSION['inputUser1'])){
           if($_SESSION['inputUser1']['usertype'] != 1){
               header("Location: index.php");
           }
        }elseif(!isset($_SESSION['inputUser1'])){
             header("Location: index.php");
        }

        ?>
