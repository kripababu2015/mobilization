<!DOCTYPE html>
<html>
<head>
<title>registration form</title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 -->


<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
           <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>
    </head>
    <style>





</style>
<body>

<nav class="navbar navbar-expand-lg top1 front">
        <div class="container">
           
                <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Home</a></li>
         </div>
    </div>
</nav>

<h1>Login</h1>

<form method="post" action="<?php echo base_url()?>Main/logincheck">
<table>
<tr><td>Name</td><td><input type="text" name="name" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"  required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td></tr>
<tr><td></td><td><input type="submit" name="submit"></td></tr>

</table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</body>
</html>
