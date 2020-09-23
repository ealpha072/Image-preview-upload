<?php
    $msg = '';
    $msg_class = ''; 
    $conn = mysqli_connect('localhost','root','','img-upload');
    //if button is clicked;
    if(isset($_POST['save-profile'])){
        $userbio = mysqli_real_escape_string($conn,$_POST['bio']);
        $imageName = time(). '-'. $_FILES['profile-img']['name'];
        $location = "images/"
        $targeted_file = $location.basename($imageName);
        //validation(img size;size is in bytes);
        if($_FILES['profile-img']['size']>200000){
            $msg = "Image size too big.Max size is 200kb";
            $msg_class = "alert-danger";
        }
        //check if file exists
        if(file_exists($targeted_file)){
            $msg  = 'Image already exists';
            $msg_class = 'alert-danger';
        }
        //upload if no errors
        if(empty($error)){
            if(move_uploaded_file($_FILES['profile-img']['tmp_name'], $targeted_file)){
                $myquery= "INSERT INTO users SET image = '$imageName',bio = '$userbio'";
                if(mysqli_query($conn,$myquery)){
                    $msg = 'Image uploaded and saved in database';
                    $msg_class = 'alert-success';
                }else{
                    $msg = 'Error in the database';
                    $msg_class = 'alert-danger';
                }
            }else{
                $msg = 'There was an error uploading file';
                $msg_class = 'alert-danger'
            }
        }
    }
?>
