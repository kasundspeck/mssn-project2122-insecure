<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"> 

<head> 
    <title>Ask a Question</title>
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
                            <p id="" style="font-size: 20px;"> <strong> Ask a Question</strong></p>
                            <p>Type your question below</p>
                        </div>

                            <div class="card-body bg-light">

                                <div class="container-fluid">
                                    <form action="post_question.inc.php" method="POST" id="question-form" role="form">
                                        <div class="controls">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group"> <label >Question</label> <input type="text" name="question" class="form-control" placeholder="Please enter your question" required="required" data-error="Question is required."> </div>
                                                </div>
                                            </div>
                                            
                                            </div>

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Post Question</button> 
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