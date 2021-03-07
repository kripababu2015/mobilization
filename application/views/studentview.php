<!DOCTYPE html>
<html>
    <head>
        <title>Mobilization</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
    <!--nav starts--->
    <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>Main/dashboard_ddu"> Home</a>         
      </div>
    </nav>
    <!---nav ends-->
   <!--  /*******************
*@function name:studentview
*@function:viewing student details
*@Author:keerthi
*@date:04/03/2021
*******************/  -->
    <body>
      <!-- //table format starts -->
    <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Studentname</th>
      <th scope="col">Gender</th>
      <th scope="col">Member of kudumbashree</th>
      <th scope="col">APL/BPL</th>
      <th scope="col">Religion</th>
      <th scope="col">Caste</th>
      <th scope="col">Category</th>
      <th scope="col">Member of MNREG</th>
      <th scope="col">Panchayath</th>
      <th scope="col">District</th>
      <th scope="col">Project</th>
      <th scope="col">Course</th>
      
 </tr>
    <?php
                if($n->num_rows()>0)
                {
                    foreach ($n->result() as $row)
                     {
                ?>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row->name;?></td>
      <td><?php echo $row->gender;?></td>
      <td><?php echo $row->kudumbasree;?></td>
      <td><?php echo $row->aplbpl;?></td>
      <td><?php echo $row->religion;?></td>
      <td><?php echo $row->caste;?></td>
      <td><?php echo $row->category;?></td>
      <td><?php echo $row->mgnreg;?></td>
      <td><?php echo $row->panchayath;?></td>
       <td><?php echo $row->disname;?></td>
        <td><?php echo $row->pname;?></td>
        <td><?php echo $row->cname;?></td>
      <!-- <td><a href="<?php echo base_url()?>Main/stud_delete/<?php echo $row->sid;?>">Delete</a></td>
       <td><a href="<?php echo base_url()?>Main/stud_update/<?php echo $row->sid;?>">Update</a></td> -->
                
      
    </tr>
    <?php     }
                }
                
                    ?>
    
  </tbody>
</table>
   <!--  //table fromat ends -->
</body>

<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>
</html>
