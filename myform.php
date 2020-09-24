<?php include_once('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin-User System</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col form-div offset-md-4">
                <a href="" >View all profiles</a>
                <form method="post" action="myform.php" enctype="multipart/form-data">
                    <h2 class="text-center mb-3 mt-3">Update Profile</h2>
                    <?php if(!empty($msg)):?>
                        <div class="alert <?php echo $msg_class ?>" role="alert">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group text-center" style="position:relative;">
                        <span class="img-div">
                            <div class="text-center img-placeholder" onclick="triggerClick()">
                                <h4>Update image</h4>
                            </div>
                            <img src="images/images.jpg" onclick="triggerClick()" class="img-fluid" id="profile-display">
                        </span>
                        <input type="file" name="profile-img" onchange="showImage(this)" id="profile-img" class="form-control" style="display:none;">
                        <label>Profile Image</label>
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="save-profile">Save user</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
