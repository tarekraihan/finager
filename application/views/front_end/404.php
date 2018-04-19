<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>404 Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/front_end/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .headline{
            font-size: 200px;
            text-align: center;
        }
        .not-found-text{
            text-align: center;
        }
        .back-to-homepage{
            margin: 0 auto;
            display: block;
            width: 200px;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="headline">404</h1>
            <p class="not-found-text">We are sorry but the page your were looking for was not found..</p>
            <a href="<?php echo base_url();?>" class="btn btn-success back-to-homepage "> << Back to Home Page </a>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>resource/front_end/js/bootstrap.min.js"></script>
</body>
</html>