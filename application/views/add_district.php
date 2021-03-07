<!DOCTYPE html>
<html>
<head>
	<title>Add district</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <!--nav starts---->
    <nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
     		 <div class="navbar-header">
     		 <a class="navbar-brand" href="<?php echo base_url()?>Main/dashboard_ddu"> Home</a>  
     		</div>
     	</div>
    </nav>
    <!----nav ends--->
      <!-- /*******************
*@function name:adddistirct
*@function:add district  view page
*@Author:Kripa Babu
*@date:05/03/2021
*******************/-->
<body>

	<div class="container py-5 w-50">
		<!--form section--->
	<form action ="<?php echo base_url()?>Main/insert_district" method="post" >
		<fieldset class="form-control">
			<h2 class="text-center">Add District</h2>
			
			<input type="text" name="district" placeholder="District Name" class="form-control">
			<label>Project Name:</label>
			<select name="project" class="form-control">
				<?php 
	if(isset($n))
	{

		foreach ($n->result()as $row1) 
		{
			
		?>
				<option value="<?php echo $row1->pid ?>"><?php echo $row1->pname?></option>


		<?php
		}
		}
		?>			
				
			</select>
				<div class="py-3 text-center">
				<input type="submit" name="submit" value="Add" class="form-control btn btn-primary w-25 ">
			</div>
		</fieldset>
		</div>
	</form>
<!---from section ends--->

</body>
</html>