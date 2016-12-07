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
            border:dotted black ;
            border-radius: 10px;
            margin-top:20px;
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
                    <h1> My Email Form</h1>

                    
                        <div class="row">
                            <form method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" />
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