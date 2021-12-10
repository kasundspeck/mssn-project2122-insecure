<!DOCTYPE html>
<html lang="en"> 

<head> 
    <title>ask a question</title>
    <link rel="stylesheet" type="text/css" href="cssfile.css"> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</head>

<body>

    <?php include_once 'navifooter/navi.php'; ?>

    <div class="contentt">
        

        <div id="form">
                    <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-9 bg-light">

                        <div class="text-center mt-5">
                            <p id="" style="font-size: 20px;"> <strong> LOG IN </strong></p>
                            <p>If you don't have an account yet, <a href="signup.php"> click here </a> to sign up </p>
                        </div>

                            <div class="card-body bg-light">

                                <div class="container-fluid">
                                    <form action="signuplogin/login.inc.php" method="POST" id="contact-form" role="form">
                                        <div class="controls">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group"> <label >Username</label> <input type="text" name="username" class="form-control" placeholder="Please enter your username" required="required" data-error="Username is required."> </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group"> <label>Password</label> <input type="password" name="password" class="form-control" placeholder="Please enter your password" required="required" data-error="Password is required."> </div>
                                            </div>
                                            
                                            </div>

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Log In</button> 
                                            </div>
                                        
                                        <?php
                                                if ($_GET["error"]== "none") {
                                                echo "<script type='text/javascript'>alert('You are signed up, please log in!');</script>";
                                        
                                            }

                                            if ($_GET["status"]== "tocomment") {
                                                echo "<script type='text/javascript'>alert('In order to be able to comment or make questions, you must first log into our website!');</script>";
                                            
                                            }

                                            if ($_GET["status"]== "wronginfo") {
                                                echo "<script type='text/javascript'>alert('Wrong log in information. Try again!');</script>";
                                            
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

    <br> <br>
        
</body>

<footer> <?php include_once 'navifooter/footer.php'; ?> </footer>

</html>