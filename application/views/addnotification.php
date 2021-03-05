<!DOCTYPE html>
<html>
<head>
  <title>mobilization</title>
  <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

</head>
<!-- /*******************
*@function name:addnotification
*@function:add notification to admin
*@Author:keerthi
*@date:05/03/2021
*******************/ -->
<body>
 <nav class="bg">
<div class="container-fluid py-3 text-dark">
<div class="row">
<div class="col-3">
    <i class="fas fa-map-marker-alt">MT Nagar,2nd Street,Delhi </i>
</div>
<div class="col-3">
    <i class="fa fa-phone">-9605805161</i>
</div>
<div class="col-3">
    <i class="fa fa-envelope"> team2@gmail.com</i>
</div>
<div class="col-3 text-end">
    <i class="fab fa-facebook"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-google"></i>
<i class="fab fa-pinterest"></i>
</div>

</div>

</div>
</nav>
  <form action="<?php echo base_url()?>Main/notifcation_add" method="post" >
    <center>
       
      <fieldset>
        
      <div class=" container w-25 py-5">

          <h1>MESSAGE</h1>
          <input type="text" name="message" placeholder="MESSAGE" class="form-control ">
            <div class="py-3">

          <input type="submit" name="submit" value="sumbit" class="btn btn-primary w-50 ">
           
          </div>
        </fieldset>
    </div>
    </center>
  </form>

</body>
</html>