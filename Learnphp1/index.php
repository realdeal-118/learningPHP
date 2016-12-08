<?php

if($_POST["Submit"]){


    if(!$_POST['firstName']){
        $error="<br />Please enter your first name";
    }

    if(!$_POST['lastName']){
        $error.="<br />Please enter your last name";
    }

    if(!$_POST['email']){
        $error.="<br />Please enter your email address";
    }

    if(!$_POST['telNumber']){
        $error.="<br />Please enter your telephone number";
    }

    if(!$_POST['comment']){
        $error.="<br />Please enter your comment";
    }

    if($_POST['email']!="" and !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

        $error.="<br />Please enter a valid email address";
    }
    if($error){

        $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
    }
    else{
        if(mail("lmf@xyz.com", "Comment from Website","Name: ".$_POST."
            
            Email: ".$_POST['email']."
            Comment: ".$_POST['comment'])) {
            
            $result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
        }
        else{
            
            $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
        }
    }

}

?>



<!doctype html>
<html>
<head>
    <title>My First Webpage</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/bootstrap-theme.css" rel="stylesheet" />
    <link href="Content/bootstrap-theme.min.css" rel="stylesheet" />

    <style>
        #emailForm{
            border:2px double blue;
            border-radius: 10px;
            margin-top:20px;
            padding-bottom:10px;

        }

        #title{
            text-align:center;
        }
    </style>
</head>
<body>
    <div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="emailForm">
                    <h1 id="title"> My Email Form</h1>

                     <?php

                     echo $result;

                    ?>
                        <p class="lead">Please get in touch, I will get back to you soon.</p>

                            <form method="POST">

                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" />
                                </div>

                                <div class=form-group>
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" />
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" />
                                </div>

                                <div class="form-group">
                                    <label for="telNumber">Tel Number</label>
                                    <input type="tel" class="form-control" name="telNumber" placeholder="Tel Number" />
                                </div>

                                <div class="form-group">
                                    <label for="comment">Your Comment</label>
                                    <textarea class="form-control" name="comment" placeholder="Enter your comment here"></textarea>
                                </div>

                                <input type="submit" name="Submit" class="btn btn-success btn-lg" value="Submit" />
                                <!--<button type="submit" class="btn btn-success btn-lg">Submit</button>-->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Form will submit using the Post Method-->







    </div>
</body>
</html>
