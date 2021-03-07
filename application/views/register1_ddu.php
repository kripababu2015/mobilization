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
    <!---nav starts-->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url()?>Main/staff_dashboard_ddu"> Home</a>
       </div>
    </nav>
    <!---nav ends--->
<body>
    <div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card" style="width: 83rem; height:38rem;">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Register Profile</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body "> 

                  <form class="form form-group" method="post" action="<?php echo base_url()?>Main/studentsadd">
                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                         <label class="bmd-label-floating">District</label>
                         <!--  <input type="text" class="form-control"> -->
                         <select name="district" class="form-control">
                          <?php 
    if(isset($user_da)) 
    {
      foreach($user_da->result() as $row1)
      {
      ?>      
                            <option></option>
                            <option value="<?php echo $row1->disid;?>"><?php echo $row1->disname;?></option>
                            
                            
                             <?php
                    }
                  }
                  ?>
                         </select>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Batch</label>
                          <!-- <input type="email" class="form-control"> -->
                          <select name="batch" class="form-control">
                            <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>        
                           <option></option>
                            <option value="<?php echo $row1->pid;?>"><?php echo $row1->pname;?></option>

                            <!-- <option value="" class="text-dark">YuvaKeralam</option>
                            <option value="">DDU-GKY</option> -->
                             <?php
                    }
                  }
                  ?>
                           </select>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Course</label>
                          <!-- <input type="text" class="form-control"> -->
                          <select name="course" class="form-control">
                             <?php 
    if(isset($user_dat)) 
    {
      foreach($user_dat->result() as $row1)
      {
      ?>        
               
                            <option ></option>
                            <option value="<?php echo $row1->cid;?>"><?php echo $row1->cname;?>
                             <!--  <input type="hidden" name="coursename" value="<?php echo $row1->cname;?>"> -->
                            </option>


                  <?php
                    }
                  }
                  ?>
                       
                            
                          </select>
                        </div>
                      </div>
                     
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <!-- <input type="text" class="form-control"> -->
                            <select name="gender" class="form-control">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female" class="text-dark">Female</option>
                                <option value="other">Others</option>
                                <!-- <option value="" class="text-dark">Coorporation</option> -->    
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Whether member in kudumbasree?</label>
                          <!-- <input type="text" class="form-control"> -->
                            <select name="kudumbasree" class="form-control">
                                <option value=""></option>
                                <option value="Yes" class="text-dark">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">BPL or APL</label>
                          <!-- <input type="text" class="form-control"> -->
                          <select name="aplbpl" class="form-control">
                            <option value=""></option>
                            <option value="BPL" class="text-dark">BPL</option>
                            <option value="APL">APL</option>  
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Religion</label>
                          <!-- <input type="text" class="form-control"> -->
                          <select name="religion" class="form-control">
                            <option value=""></option>
                            <option value="Hindu" class="text-dark">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Christain" class="text-dark">Christain</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                          <!-- <input type="text" class="form-control"> -->
                          <select name="category" class="form-control">
                            <option value=""></option>
                            <option value="General" class="text-dark">General</option>
                            <option value="SC">SC</option>
                            <option value="ST" class="text-dark">ST</option>    
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Caste</label>
                          <!-- <input type="text" class="form-control"> -->
                          <select name="caste" class="form-control">
                            <option value=""></option>
                            <option value="Ezhava" class="text-dark">Ezhava</option>
                            <option value="Nair">Nair</option>
                            <option value="Brahimin" class="text-dark">Brahimin</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">MGNREG  </label>
                              <select name="mgnreg" class="form-control">
                                <option value=""></option>
                                <option value="Yes" class="text-dark">Yes</option>
                                <option value="No">No</option>    
                              </select>
                         </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Panchayath/urban/Muncipality/Coorporation</label>
                          <!-- <input type="text" class="form-control"> -->
                            <select name="panchayth" class="form-control">
                                <option value=""></option>
                                <option value="Panchayath">Panchayath</option>
                                <option value="Municipality" class="text-dark">Municipality</option>
                                <option value="Urban">Urban</option>
                                <option value="Coorporation" class="text-dark">Coorporation</option>    
                            </select>
                        </div>
                      </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary "style="margin-left:550px;margin-top: 40px;">Add Profile</button>
                    <div class="clearfix"></div>
                </table>
                  </form>
                </div>
              </div>
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
</body>     
</html>