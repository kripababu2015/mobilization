<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/style.css">
    </head>
    <!---nav starts-->
    <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>Main/dashboard_ddu"> Home</a>      
      </div>
    </nav>
    <!---nav ends-->
<body>
  <!-- /*******************
*@function name:courseview
*@function:viewing course details
*@Author:keerthi
*@date:05/03/2021
*******************/ -->
 <a href="<?php echo base_url()?>Main/addcourse_target/">addcourse</a>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Coursename</th>
      <th scope="col">Totalseat</th>
      <th scope="col">Action</th>
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
      <td><?php echo $row->cname;?></td>
      <td><?php echo $row->totalseat;?></td>
      <td><a href="<?php echo base_url()?>Main/delete/<?php echo $row->cid;?>">Delete</a>
        <a href="<?php echo base_url()?>Main/updatecourse_target/<?php echo $row->cid;?>">update</a>

</td>
                </tr>
      
    </tr>

    <?php     }
                }
                
                    ?>
    
  </tbody>
</table>

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
