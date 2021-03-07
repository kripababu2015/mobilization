<!DOCTYPE html>
<html>
<head>
  <title>mobilization </title>
  <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/><link rel="stylesheet" href="../css/style.css">
    </head>
    <!---nav starts--->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>Main/dashboard_ddu"> Home</a>        
      </div>
    </nav>
    <!--nav ends-->
<!-- /*******************
*@function name:viewingnotification
*@function:viewing notification send by staff
*@Author:keerthi
*@date:05/03/2021
*******************/ -->
<body>
  <h1>NOTIFICATION</h1> 
        <table class="table table-success table-striped table-hover">
          <tr>
              <th>NOTIFICATION</th>
                  <th>CURRENTDATE</th>
          </tr>
  <?php
    if($n->num_rows()>0)
    {
      foreach($n->result() as $row)
      {
        ?>
        <tr>
          <td>
            <?php echo $row->message;?></td>
            <td> 
              <?php echo $row->currentdate;?></td>
        </tr>
              <input type="hidden" name="id" value="<?php echo $row->id;?>">
        </tr>
          <?php
          }
          }
          ?>
        </form>

</body>
</html>