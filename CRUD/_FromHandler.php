
    <?php
    echo '<pre>';
    print_r($_GET);
    if (isset($_GET['formsubmitted'])) {

        require 'includes/configs.php';
        print_r($_POST);
        print_r($_FILES);

        $FirstName = $_POST['FirstName'];
        $lastName = $_POST['lastName'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $age = $_POST['age'];
        $Email = $_POST['Email'];
        $gender = $_POST['gender'];

        $FileName = $_FILES['ProfilePic']['name'];
        $from = $_FILES['ProfilePic']['tmp_name'];
        $to = "ServerImgFolder/" . $FileName;

        if (move_uploaded_file($from, $to)) {
            
            echo 'img saved in folder';
            
            $SendQuery = "INSERT INTO `students` (`firstName`, `lastName`, `age`, `gender`, `email`, `contact`, `fileName`, `stdId`) VALUES ('$FirstName', '$lastName', '$age', '$gender', '$Email', '$PhoneNumber', '$FileName', NULL)";
            
            if (mysqli_query($DataBaseConnection, $SendQuery)) {
                echo "data uploded";
                header('Location: home.php');
                die();
            };
        }
    }
    echo '</pre>';    ?>