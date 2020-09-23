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
    }


?>
