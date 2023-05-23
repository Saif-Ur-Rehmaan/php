<?php include "includes/head.php"; ?>
<?php include "includes/header.php"; ?>
<?php 
if (isset($_GET["id"])) {
    include 'includes/configs.php';
    $id=$_GET["id"];
    $GetRowToBeUpdated= mysqli_fetch_assoc( mysqli_query($DataBaseConnection,"SELECT * FROM `students` WHERE `students`.`stdId`=$id"));


?>



<div class="container  my-5 py-3 bg-light d-flex justify-content-center">

    <form action="updateHandler.php?formsubmitted=true&id=<?php echo $id;?>" method="post" enctype="multipart/form-data" class="col-7 rounded  p-3 bg-dark text-light">
        <div class="col-12 rounded py-3">
            <h4 class="text-center  ">
                Updation Form
            </h4>
        </div>
        <div class="row  justify-content-center align-item-center">
            <div class="row">
                <div class="col-6">
                    <label for="FirstName ">FirstName</label>
                    <input required value=" <?php echo $GetRowToBeUpdated["firstName"];?>" type="text" name="FirstName" class="form-control " id="">
                </div>
                <div class="col-6">

                    <label for="lastName">lastName</label>
                    <input required value=" <?php echo $GetRowToBeUpdated["lastName"];?>" type="text" name="lastName" class="form-control " id="">

                </div>

            </div>
            <div class="row my-3">
                <div class="col-6">
                    <label for="PhoneNumber">PhoneNumber</label>
                    <input required value=" <?php echo $GetRowToBeUpdated["contact"];?>" type="text" name="PhoneNumber" class="form-control " id="">
                </div>
                <div class="col-6">
                    <label for="age">age</label>
                    <input required value=" <?php echo $GetRowToBeUpdated["age"];?>" type="text" name="age" class="form-control " id="">
                </div>


            </div>
            <div class="row ">
                <div class="col-12">
                    <label for="Email">Email</label>
                    <input required value=" <?php echo $GetRowToBeUpdated["email"];?>" type="email" name="Email" class="form-control " id="">
                </div>
                <div class="col-6 my-3">

                    <label for="ProfilePic">Profile Pic</label>
                    <input  type="file" name="ProfilePic" class="form-control " id="">

                </div>
                <div class="col-6 d-flex align-items-center pt-4">
                    <div class="form-check form-check-inline">
                        <input required class="form-check-input" type="radio" name="gender" id="femaleGender" value="female"  <?php if ($GetRowToBeUpdated["gender"]=="female") {
                          echo 'checked';
                        } ?>  />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input required class="form-check-input" type="radio" name="gender" id="maleGender" value="male" <?php if ($GetRowToBeUpdated["gender"]=="male") {
                          echo 'checked';
                        } ?> />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input required class="form-check-input" type="radio"  <?php if ($GetRowToBeUpdated["gender"]=="other") {
                          echo 'checked';
                        } ?>  name="gender" id="otherGender" value="other" />
                        <label class="form-check-label" for="otherGender">Other</label>
                    </div>


                </div>

            </div>
            <div class="row justify-content-center my-3">
                <input required type="submit" value="UPDATE" class="col-3 btn btn-primary">
            </div>


    </form>
</div>

<?php } include "includes/footer.php"; ?>