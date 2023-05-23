<?php
include 'includes/configs.php';
echo '<pre>';
print_r($_POST);
print_r($_GET);
echo '</pre>';

if (isset($_GET["formsubmitted"])) {
    $id=$_GET["id"];
    $FirstName = $_POST['FirstName'];
    $lastName = $_POST['lastName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $age = $_POST['age'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];

    $FileName = $_FILES['ProfilePic']['name'];
    $from = $_FILES['ProfilePic']['tmp_name'];
    $to = "ServerImgFolder/" . $FileName;


    $query="UPDATE `students` SET `firstName` = '$FirstName', `lastName` = '$lastName', `age` = '$age', `gender` = '$gender', `email` = '$Email', `contact` = '$PhoneNumber', `fileName` = '$FileName', `stdId` = $id WHERE `students`.`stdId` =$id";
    mysqli_query($DataBaseConnection,$query);

    header("location: SeeData.php");
}
?>