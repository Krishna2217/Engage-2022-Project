
<?php

    // connect to database
    include "dbconnect.php";

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>iCoder</title>
</head>

<body>

    <?php
    
        // we are going to fetch details from form

        $insert = false;

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            echo "AA gyee";
            // fetch all details
            $cname  = $_POST['name'];
            $c_fname = $_POST['fathername'];
            $c_mname= $_POST['mothername'];
            $c_gender = $_POST['gender'];
            $c_dob = $_POST['dob'];
            $c_bgroup = $_POST['bloodgroup'];
            $c_imarks = $_POST['imarks'];
            $c_nationality = $_POST['nationality'];
            $c_religion = $_POST['religion'];



            // insert into table (criminalrecord)

            $sql = "INSERT INTO `criminalrecord` (`name`, `fname`, `mname`, `gender`, `dob`, `b_group`, `i_marks`, `nationality`, `religion`) VALUES ('$cname', '$c_fname', '$c_mname', '$c_gender', '$c_dob', '$c_bgroup', '$c_imarks', '$c_nationality', '$c_religion')";

            $result = mysqli_query($conn,$sql);

            if($result){
                $insert  =true;
            }else{
                echo "Nhii hua";
            }

        }
    
    ?>
    <div class="container-fluid bg-dark mb-0 py-0">
        <h1 class="text-center text-white py-4"> Register Criminal </h1>

        <div class="container  d-flex">
            <div class="side-1 container ">
                <form action="" class=" text-white">
                    <input type="file" id="myFile" name="filename">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                <a href="#"><button class="btn-primary">Upload Image</button></a>
                <a href="#"><button class="btn-primary">Capture Image</button></a>
            </div>
            <div class="side-2 container text-white border border-primary">
                <form action="crimInfo.php" method="post">
                    <div class="mb-3"> 
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputFatherName" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="exampleInputFather" name="fathername" aria-describedby="emailHelp"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMotherName" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="exampleInputMotherName" name="mothername" aria-describedby="emailHelp"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGender" class="form-label">Gender</label>

                        <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked  required>
                        <label class="form-check-label" for="gender">
                            Male
                        </label>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="female"  required>
                        <label class="form-check-label" for="gender">
                            FeMale
                        </label>
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="other"  required>
                        <label class="form-check-label" for="gender">
                        other
                        </label>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputDOB" class="form-label">DOB</label>
                    <input type="date" name="dob" id="DOB"  required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputBloodGroup" class="form-label">Blood Group</label>
                        <input type="text" class="form-control" id="exampleInputBloodGroup" name="bloodgroup" aria-describedby="emailHelp"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputIdentificationMark" class="form-label">Identification Marks</label>
                        <input type="text" class="form-control" id="exampleInputIdentificationMark" name="imarks" aria-describedby="emailHelp"  required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputNationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="exampleInputNationality" name="nationality" aria-describedby="emailHelp"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputReligion" class="form-label">Religion</label>
                        <input type="text" class="form-control" id="xampleInputReligion" name="religion" aria-describedby="emailHelp"  required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        if($insert){
            echo ' 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Succes!</strong> Record inserted successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



    <!-- j Query and other things -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>