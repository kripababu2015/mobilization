<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>



<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>
    </head>
    <style>







</style>
<body>

<nav class="navbar navbar-expand-lg top1 front">
        <div class="container">
           
                <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link  text-dark">Home</a></li>
              <!--   <li class="nav-item"><a href="<?php echo base_url()?>main1/register" class="nav-link  text-dark">Register</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>main1/login" class="nav-link  text-dark">Login</a></li> -->
               
           
        </div>
    </div>
</nav>


<form action="<?php echo base_url()?>Main/regi" method="post">


<div class="padding log">



<h1 class="white font p-t" >REGISTRATION</h1><br>
<input class="txt" type="text" name="name" placeholder="E-mail/phone number/username" required maxlength="25" pattern="[a-zA-Z]+"><br><br>
      <input type="email" name="email" id="email"><span id="email_result"><br><br>
<input type="password" name="password"  required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
<input type="submit" name="submit" value="login" class="b-log"><br>



</div>

</div>
</form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>main/email_availibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });
</script>
</body>
</html>

