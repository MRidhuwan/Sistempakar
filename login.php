

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Flat Modal Login Modal Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            font-family: 'Varela Round', sans-serif;
            background: url(images/bg.jpg) no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        .modal-dialog {
            box-shadow: 100px 2px 40px rgba(51, 50, 50, 0.5);
        }

        .modal-login {
            width: 50%;
        }

        .modal-login .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
        }

        .modal-login .modal-header {
            border-bottom: none;
            position: relative;
            justify-content: center;
        }

        .modal-login .close {
            position: absolute;
            top: -10px;
            right: -10px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, .5);
        }

        .modal-login h4 {
            color: #636363;
            text-align: center;
            font-size: 26px;
            margin-top: 0;
        }

        .modal-login .modal-content {
            color: #999;
            border-radius: 1px;
            margin-bottom: 15px;
            background: #fff;
            border: 1px solid #f3f3f3;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 25px;

        }

        .modal-login .form-group {
            margin-bottom: 20px;
        }

        .modal-login label {
            font-weight: normal;
            font-size: 13px;
        }

        .modal-login .form-control {
            min-height: 38px;
            padding-left: 5px;
            box-shadow: none !important;
            border-width: 0 0 1px 0;
            border-radius: 0;
        }

        .modal-login .form-control:focus {
            border-color: #ccc;
        }

        .modal-login .input-group-addon {
            max-width: 42px;
            text-align: center;
            background: none;
            border-width: 0 0 1px 0;
            padding-left: 5px;
            border-radius: 0;
        }

        .modal-login .btn {
            font-size: 16px;
            font-weight: bold;
            background: #19aa8d;
            border-radius: 3px;
            border: none;
            min-width: 140px;
            outline: none !important;
        }

        .modal-login .btn:hover,
        .modal-login .btn:focus {
            background: #179b81;
        }

        .modal-login .hint-text {
            text-align: center;
            padding-top: 5px;
            font-size: 13px;
        }

        .modal-login .modal-footer {
            color: #999;
            border-color: #dee4e7;
            text-align: center;
            margin: 0 -25px -25px;
            font-size: 13px;
            justify-content: center;
        }

        .modal-login a {
            color: #fff;
            text-decoration: underline;
        }

        .modal-login a:hover {
            text-decoration: none;
        }

        .modal-login a {
            color: #19aa8d;
            text-decoration: none;
        }

        .modal-login a:hover {
            text-decoration: underline;
        }

        .modal-login .fa {
            font-size: 21px;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
            top: 50%;
            left: 50%;
            margin-top: 300px;
            margin-left: -250px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="text-center">
        <!-- Button HTML (to Trigger Modal) -->
        <a href="#myModal" class="trigger-btn btn-primary btn-lg active" data-toggle="modal">Click to Open Login
        </a>
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                
                <div class="modal-body">
                    <form action="cek.php" method="POST" class="form-login">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit"class="btn btn-primary btn-block btn-lg">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>