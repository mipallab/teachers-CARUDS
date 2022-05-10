<?php 
    require_once "autoload.php";
    // gets data
    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $sub = $_POST['subject'];
        $qualifications = $_POST['qualifications'];
        $parmanent_address = $_POST['parmanent_address'] ?? '';
        $present_address = $_POST['present_address'] ?? '';
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $com_pass = $_POST['com_pass'];

        $photo = $_FILES['photo'];
        move_uploaded_file(($_FILES['photo']['tmp_name']), "./assect/img/teachers-photo/" . ($_FILES['photo']['name']));
      


    
        $error= [];
        //name
        if(empty($name)){
            $error['name'] = "Name field required!";
        }

        //sub
        if(empty($sub)){
            $error['subject'] = "subject field required!";
        }

        //qualifications
        if(empty($qualifications)){
            $error['qualifications'] = "qualifications field required!";
        }

        //parmanent_address
        if(empty($parmanent_address)){
            $error['parmanent_address'] = "parmanent_address field required!";
        }

        //present_address
        if(empty($present_address)){
            $error['present_address'] = "present_address field required!";
        }

        //phone
        if(empty($phone)){
            $error['phone'] = "phone field required!";
        }

        //email
        if(empty($email)){
            $error['email'] = "email field required!";
        }

        //password
        if(empty($password)){
            $error['password'] = "password field required!";
        }

        //com Password
        if(empty($com_pass)){
            $error['comfarm_password'] = "comfarm password field required!";
        }

    
    
        
        if(count($error) === 0) {

            $connect -> query("INSERT INTO teachers(name, subject, qualifications, parmanent_address, present_address, phone, email, password) VALUES ('$name','$sub', '$qualifications', '$parmanent_address','$present_address' ,'$phone' ,'$email','$password')");
            
            $datasend = "data send successfully";
        }
        else {
            $datasend = "something wrong!";
        }
    
    }




    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Sign up Page</title>

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body style="background-color:seashell">
    

    <div class="container">
        <div class="w-50 my-5 mx-auto">
            <div class="card">
                <a class="btn btn-primary float-right" href="./members.php">All Members</a>
                <div class="card-header">
                    <h2> Teachers sign up</h2>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($datasend)){
                            echo "
                                <div class=\"text-warning\"> $datasend </div>
                            ";
                        }
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Your Full Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Your Full Name" name="name">

                            <div class="text-danger">
                                <?php 
                                    if(isset($error['name'])){
                                        echo $error['name'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sub">Your Subject</label>
                            <select class="form-control" id="sub" name="subject">
                                <option value="">--SELECT--</option>
                                <option value="bangla">Bangla</option>
                                <option value="english">English</option>
                                <option value="math">Math</option>
                                <option value="science">Science</option>
                                <option value="sscience">Social Science</option>
                                <option value="religian">Religian</option>
                                <option value="accounting">Accounting</option>
                                <option value="physic">Physic</option>
                            </select>
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['subject'])){
                                        echo $error['subject'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="qli">Teachers Qualifications</label>
                            <input class="form-control" id="qli" type="text" placeholder="Teacher's Qualification" name="qualifications">
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['qualifications'])){
                                        echo $error['qualifications'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paddress">Parmanent Address</label>
                            <textarea class="form-control" id="paddress" cols="30" rows="3" placeholder="Your Parmanent Address" name="parmanent_address"></textarea>
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['parmanent_address'])){
                                        echo $error['parmanent_address'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="presaddress">Present Address</label>
                            <textarea class="form-control" id="presaddress" cols="30" rows="3" placeholder="Your Present Address" name="present_address"></textarea>
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['present_address'])){
                                        echo $error['present_address'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="ex:+8801713564842" name="phone">
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['phone'])){
                                        echo $error['phone'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="text" placeholder="ex: example@domain.com" name="email">
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['email'])){
                                        echo $error['email'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" type="password" placeholder="password" name="password">
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['password'])){
                                        echo $error['password'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="compassword">Confarm Password</label>
                            <input class="form-control" id="compassword" type="password" placeholder="Confarm Password" name="com_pass">
                            <div class="text-danger">
                                <?php 
                                    if(isset($error['comfarm_password'])){
                                        echo $error['comfarm_password'];
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <!-- PHOTO -->
                        <div class="form-group">
                            <label for="photo">
                                <img class="preload w-50" src="" alt=""><br>
                                <img src="./assect/img/cam.png" alt="camera">
                            </label>
                            
                            <input class="d-none" type="file" id="photo" name="photo">
                        </div>

                        <!-- submit -->
                        <div class="mt-5">
                            <input class="btn btn-primary" type="submit" value="Sign Up" name="signup">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="#">already have an account?</a>
                </div>
            </div>
        </div>
    </div>


     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function (){
            jQuery('#photo').change(function(e){
                let url = URL.createObjectURL(e.target.files[0]);
                jQuery('.preload').attr('src',url);
            });
        });
    </script>
</body>
</html>