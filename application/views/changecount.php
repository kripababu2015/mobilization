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
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/><link rel="stylesheet" href="../css/style.css"> </head>
         <!--nav starts--->
    <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url()?>Main/dashboard_ddu"> Home</a>  
        </div>
    </nav>
    <!---nav ends-->

  <!-- /*******************
*@function name:change count
*@function:changing  count
*@Author:Kripa Babu
*@date:05/03/2021
*******************/-->
<body class="">
    

 <form action="<?php echo base_url()?>Main/changecountaction" method="post">
    <div>
    <div class="container w-25 py-5 col-ms-6">
        <div class="form-outline text-center">
            <label class="form-label h2 text-primary " for="form1">Districts </label>
        </div>
            Project: <select name="project" class="form-select">
            <?php
            if($n->num_rows()>0)
            {
                foreach($n->result() as $row)
                    {
            ?>
            
                <option value="<?php echo $row->pid;?>"><?php echo $row->pname;?></option>

             <?php
                }
            }
            ?>  
             
        </select>
        
<br>           <label class="form-label" for="select">Course name</label>
                        <select class="form-select" id="select" name="cname"aria-label="Default select example">
                                <option></option>
                            <?php 

            if($n1->num_rows()>0)
            {
                foreach($n1->result() as $row)
                    {
            ?>
                            
                            <option value="<?php echo $row->cid;?>"><?php echo $row->cname?></option>
                             <?php
                }
            }
            ?>   
             
                        </select>
                        


        <label>Seat Borrow from</label>
        <select name="district" class="form-select" >
            <option></option>
            <?php 

            if($n2->num_rows()>0)
            {
                foreach($n2->result() as $row)
                    {
            ?>
                
                        <option value="<?php echo $row->disid;?>" require><?php echo $row->disname?></option>
                        <?php
                }
            }
            ?> 
        </select>
       
                <label>Seat Required for</label>
        <select name="dis" class="form-select" >
            <option></option>
            <?php 

            if($n2->num_rows()>0)
            {
                foreach($n2->result() as $row)
                    {
            ?>
                
                        <option value="<?php echo $row->disid;?>" require><?php echo $row->disname?></option>

                        <?php
                }
            }
            ?> 
           
        </select>
         <label>Add seat</label>
         
            <input type="text" name="addseat" class="form-control">
         

       <!-- <label>Add seat</label>
        <input type="text" name="distarget" class="form-control "> -->

                   <div class="py-3">     
                        
                <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                
            </div>

        
</form>


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
