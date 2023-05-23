<?php
if (isset($_GET["id"])) {
    include "includes/configs.php";
    $id = $_GET["id"];
    $rs=mysqli_query($DataBaseConnection, "DELETE FROM students WHERE `students`.`stdId` = $id");
    if ($rs) {
        header("location: SeeData.php");
        die();
    } else {
        echo 'delition of data is unccessfull';
    }
};
