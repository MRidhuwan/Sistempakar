<?php
include 'koneksi.php';

if(isset($_POST['regis'])){
    
    $nm_cs      = $_POST['nm_cs'];
    $keluhan    = $_POST['keluhan'];
    $tgl        = date("Y-m-d");

    $query = mysqli_query($connect, "INSERT INTO tb_cs (nm_cs, keluhan, tgl)  
        VALUES ('$nm_cs', '$keluhan', '$tgl')");

    if ($query) {
        echo "<script>alert('Data kesave') </script>";
    }else{
        echo "<script>alert('Data tidak kesimpan') </script>";
    }
    header("location:Konsultasi.php?berhasildaftar");
}
?>

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
            background: url(images/ks.jpg) no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .breadcrumb-arrow {
    height: 36px;
    padding: 0;
    line-height: 36px;
    list-style: none;
    background-color: #e6e9ed
}
.breadcrumb-arrow li:first-child a {
    border-radius: 4px 0 0 4px;
    -webkit-border-radius: 4px 0 0 4px;
    -moz-border-radius: 4px 0 0 4px
}
.breadcrumb-arrow li, .breadcrumb-arrow li a, .breadcrumb-arrow li span {
    display: inline-block;
    vertical-align: top
}
.breadcrumb-arrow li:not(:first-child) {
    margin-left: -5px
}
.breadcrumb-arrow li+li:before {
    padding: 0;
    content: ""
}
.breadcrumb-arrow li span {
    padding: 0 10px
}
.breadcrumb-arrow li a, .breadcrumb-arrow li:not(:first-child) span {
    height: 36px;
    padding: 0 10px 0 25px;
    line-height: 36px
}
.breadcrumb-arrow li:first-child a {
    padding: 0 10px
}
.breadcrumb-arrow li a {
    position: relative;
    color: #fff;
    text-decoration: none;
    background-color: #3bafda;
    border: 1px solid #3bafda
}
.breadcrumb-arrow li:first-child a {
    padding-left: 10px
}
.breadcrumb-arrow li a:after, .breadcrumb-arrow li a:before {
    position: absolute;
    top: -1px;
    width: 0;
    height: 0;
    content: '';
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent
}
.breadcrumb-arrow li a:before {
    right: -10px;
    z-index: 3;
    border-left-color: #3bafda;
    border-left-style: solid;
    border-left-width: 11px
}
.breadcrumb-arrow li a:after {
    right: -11px;
    z-index: 2;
    border-left: 11px solid #2494be
}
.breadcrumb-arrow li a:focus, .breadcrumb-arrow li a:hover {
    background-color: #4fc1e9;
    border: 1px solid #4fc1e9
}
.breadcrumb-arrow li a:focus:before, .breadcrumb-arrow li a:hover:before {
    border-left-color: #4fc1e9
}
.breadcrumb-arrow li a:active {
    background-color: #2494be;
    border: 1px solid #2494be
}
.breadcrumb-arrow li a:active:after, .breadcrumb-arrow li a:active:before {
    border-left-color: #2494be
}
.breadcrumb-arrow li span {
    color: #434a54
}


    </style>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-arrow">
    <li><a href="index.php">Home</a></li>
    <li class="active"><span>Customer</span></li>
  </ol>
</nav>

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign up for Customer MasterPrint </h3>
                </div>

    <div class="panel-body">
        <form role="form" method="post">
            <div class="row">
               <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="text" name="nm_cs" Value="" class="form-control input-sm" placeholder="Nama Perusahaan" required="required">
            </div>
                </div>
                    </div>

    <div class="form-group">
        <input type="text" name="keluhan" id="keluhan" required="required" class="form-control input-sm" 
            placeholder="Keluhan Mesin">
            </div>

            <input type="submit" name ="regis" value="Register" class="btn btn-info btn-block">
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>