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
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <!---nav starts-->
    <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>Main/dashboard_ddu"> Home</a>         
      </div>
    </nav>
    <!---nav ends--->
<body>
  <!-- /*******************
*@function name:updateproject_target
*@function:updating project_target details
*@Author:keerthi
*@date:05/03/2021
*******************/ -->
  <form action="<?php echo base_url()?>Main/updateproject_target " method="post" >
    <center>
      <fieldset>
      <div class=" container w-25 py-5">

                  <?php 
  if(isset($user_data))
  {

    foreach ($user_data->result()as $row1) 
    {
      
    ?>

          <h1>Project target</h1>
          <input type="text" name="pname" placeholder="Project Name"  required pattern="[a-zA-Z]+" class="form-control "
          value="<?php echo $row1->pname;?>">

          <label class="">Start Date</label>
          <input type="date" name="s_date"  class="form-control " required value="<?php echo $row1->s_date;?>">
           <label>End Date</label>
          <input type="date" name="e_date"  class="form-control " required value="<?php echo $row1->e_date;?>">

           <label>Year</label>
          <input type="number" name="year" placeholder="number of years" required  class="form-control "value="<?php echo $row1->year;?>">

           <label>Total Target</label>
          <input type="text" name="totalseat" placeholder="total target" required pattern="[a-zA-Z]+"  class="form-control "value="<?php echo $row1->totalseat;?>">
          <div class="py-3">  
                <input  type="hidden" name="id" value="<?php echo $row1->pid?>" >       
                <input  type="submit" name="update" value="Submit" class="btn btn-primary">
                 </div>
                  <?php
                }
            }
            ?> 
          </div>
        </fieldset>
    </div>
    </center>
  </form>

</body>
</html>