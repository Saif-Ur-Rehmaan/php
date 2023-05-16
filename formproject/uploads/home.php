<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- Bootstrap CSS v5.2.1 -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <section>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="download.jpg" style="width: 100%;height: 50vh;" class="w-100 d-block" alt="First slide">
                </div>
                <div class="carousel-item active">
                    <img src="download.jpg" style="width: 100%;height: 50vh;" class="w-100 d-block" alt="First slide">
                </div>
                <div class="carousel-item active">
                    <img src="download.jpg" style="width: 100%;height: 50vh;" class="w-100 d-block" alt="First slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <pre>
    <?php


    if (isset($_POST['submit'])) {



        print_r($_POST);
        print_r($_FILES);
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $course = $_POST['course'];
        $fileName = $_FILES['img']['name'];
        $tmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $from = $_FILES['img']['tmp_name'];
        $to = 'uploads/' . $_FILES['img']['name'];
        $responseFileUploaded = move_uploaded_file($from, $to);
        $query = "INSERT INTO `students` (`firstName`,
         `lastName`, `age`, `gender`, `email`, `contact`, `course`, `fileName`)
          VALUES ('$fileName', '$lastName', '$age', '$gender', '$email', '$contact', '$course', '$fileName')";
        $connection = mysqli_connect('localhost', 'root', '', 'studentdetails');
        $res = mysqli_query($connection, $query);

        if ($responseFileUploaded) {
            echo "<script>alert('Form submitted')</script>";
        } else {
            echo "<script>alert('Form Unsubmitted')</script>";
            echo "<script>window.location='form.php'</script>";
        };



        if ($res) {
            echo "<script>alert('data uploded')</script>";
        };
    }
    ?>




<h1>Fetching data</h1>

      
    <?php include 'components/footer.php'; ?>