<!DOCTYPE html>
<html lang="en"> 

<head> 
    <title>sign up</title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body> 


    <div>
        <div class="text-center mt-5" id="">
            <p id="">sign up</p>
            <p>If you already have an account, <a href="login.php"> click here </a> to log in </p>
    </div>

        
        <div id="form">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                        
                    <div class="card-body bg-light">
                            
                        <div class="container-fluid">
                            <form  action="signup.inc.php" method="POST" id="contact-form" role="form" oninput='rptpassword.setCustomValidity(rptpassword.value != password.value ? "Passwords do not match." : "")'> 
                                    <div class="controls">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_name" id="name">Name</label> <input type="text" name="name" class="form-control" placeholder="Enter your name" required="required" data-error="Required"> </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group"> <label>Lastname</label> <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname" required="required" data-error="Required"> </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group"> <label>Username</label> <input type="text" name="username" class="form-control" placeholder="Enter a username" required="required" data-error="Required"> </div>
                                            </div> 
                                        </div> 
                                    
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="form_email">Email</label> <input type="email" name="email" class="form-control" placeholder="Enter your email" required="required" data-error="Required"> </div>
                                            </div>
                                            
                                        </div>

                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_password" id="password1">Password</label> <input id="password1" type="password" name="password" class="form-control" placeholder="Please enter a password" required="required" data-error="Password is required."> </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_password" id="password2">Repeat your password</label> <input id="password2" type="password" name="rptpassword" class="form-control" placeholder="Please repeat your password" required="required" data-error="Please repeat your password"> </div>
                                            </div>
                                            

                                            <br> <br>

                                            <div class="col-md-12"> <input type="submit" class="button" class="btn btn-success btn-send pt-2 btn-block" value="Sign Up" id="FormSubmit" name="submit"> </div>
                                        
                                    </div> 

                                        <?php
                                        
                            

                                        if ($_GET["error"]== "usernametaken") {
                                            echo "<script type='text/javascript'>alert('Username is already taken, please choose another!');</script>";
                                        

                                        }
                                    
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>

 