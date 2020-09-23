<?php 
    $conn = mysqli_connect('localhost','root','','img-upload');
    //if button is clicked;
    if(isset($_POST['save-profile'])){
        $userbio = mysqli_real_escape_string($conn,$_POST['bio']);
        $imageNmae = time(). '-'. $_FILES['profile-img']['name'];
    }


?>