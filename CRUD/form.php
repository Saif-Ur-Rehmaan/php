<?php include "includes/head.php"; ?>
<?php include "includes/header.php"; ?>
<main>

    <div class="container  my-5 py-3 bg-light d-flex justify-content-center">

        <form action="_FromHandler.php?formsubmitted=true" method="post" enctype="multipart/form-data"
        
        class="col-7 rounded  p-3 bg-dark text-light">
            <div class="col-12 rounded py-3">
                <h4 class="text-center  ">
                    Registration Form
                </h4>
            </div>
            <div class="row  justify-content-center align-item-center">
                <div class="row">
                    <div class="col-6">
                        <label for="FirstName ">FirstName</label>
                        <input required type="text" name="FirstName" class="form-control " id="">
                    </div>
                    <div class="col-6">

                        <label for="lastName">lastName</label>
                        <input required type="text" name="lastName" class="form-control " id="">

                    </div>

                </div>
                <div class="row my-3">
                    <div class="col-6">
                        <label for="PhoneNumber">PhoneNumber</label>
                        <input required type="number" name="PhoneNumber" class="form-control " id="">
                    </div>
                    <div class="col-6">
                        <label for="age">age</label>
                        <input required type="number" name="age" class="form-control " id="">
                    </div>
                    

                </div>
                <div class="row ">
                    <div class="col-12">
                        <label for="Email">Email</label>
                        <input required type="email" name="Email" class="form-control " id="">
                    </div>
                    <div class="col-6 my-3">

                        <label for="ProfilePic">Profile Pic</label>
                        <input required type="file" name="ProfilePic" class="form-control " id="">

                    </div>
                    <div class="col-6 d-flex align-items-center pt-4">
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender" id="maleGender" value="male" checked />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>


                    </div>

                </div>  
                <div class="row justify-content-center my-3">
                    <input required type="submit" value="submit" class="col-3 btn btn-primary">
                </div>

        </form>
    </div>



</main>
<?php include "includes/footer.php"; ?>