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
        <?php



        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="emailForm">
                    <h1 id="title"> My Email Form</h1>

                    
                      
                            <form method="POST">

                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name" />
                                </div>

                                <div class=form-group>
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" />
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" />
                                </div>

                                <div class="form-group">
                                    <label for="telNumber">Tel Number</label>
                                    <input type="tel" class="form-control" id="telNumber" placeholder="Tel Number" />

                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>






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