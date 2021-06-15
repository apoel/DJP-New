<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?=$title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/bootstrap/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/jquery-3.5.1.min.js">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/docs/assets/plugins/popper/popper.min.js">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/docs/assets/plugins/bootstrap/js/bootstrap.min.js">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<style>
body {
    color: #fff;
    background: #FFFFFF;    
}
.form-control {
    min-height: 41px;
    background: #fff;
    box-shadow: none !important;
    border-color: #e3e3e3;
}
.form-control:focus {
    border-color: #70c5c0;
}
.form-control, .btn {
    border-radius: 2px;
}
.login-form {
    width: 350px;
    margin: 0 auto;
    padding: 100px 0 30px;
}
.login-form form {
    color: #7a7a7a;
    border-radius: 2px;
    margin-bottom: 15px;
    font-size: 13px;
    background: #ececec;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    position: relative;
}
.login-form h2 {
    font-size: 22px;
    margin: 35px 0 25px;
}
.login-form .avatar {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -50px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #70c5c0;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
    width: 100%;
}
.login-form input[type="checkbox"] {
    position: relative;
    top: 1px;
}
.login-form .btn, .login-form .btn:active {
    font-size: 16px;
    font-weight: bold;
    background: #70c5c0 !important;
    border: none;
    margin-bottom: 20px;
}
.login-form .btn:hover, .login-form .btn:focus {
    background: #50b8b3 !important;
}
.login-form a {
    color: #fff;
    text-decoration: underline;
}
.login-form a:hover {
    text-decoration: none;
}
.login-form form a {
    color: #7a7a7a;
    text-decoration: none;
}
.login-form form a:hover {
    text-decoration: underline;
}
.login-form .bottom-action {
    font-size: 14px;
}
</style>
</head>
<body>
<div class="login-form">
     <div class="container">
        <?php
        if(!empty(session()->getFlashdata('success'))){ ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>
             
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>
        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>
             
        <?php } ?>
 
        <?php if(!empty(session()->getFlashdata('warning'))){ ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
        </div>
             
        <?php } ?>
    </div>
    <br><br><br>
    <form action="<?php echo base_url()?>/Login/login" method="post">
        <div class="avatar">
            <li style="font-size:63px;color:white;margin-left:10px" class="fa fa-user text-center"></li>
        </div>
        <h2 class="text-center">Member Login</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="NIP" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
        <div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
        <br>
        <h6 class="text-center" style="font-size: 10px;">Don't have an account? <a href="#">Sign up here!</a></h6>
    </form>
</div>
</body>
</html>