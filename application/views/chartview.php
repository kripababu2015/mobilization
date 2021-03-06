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
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url()?>Main/staff_dashboard_ddu"> Home</a>  
           
           
      </div>
    </nav>
<!-- /*******************
*@function name:chartview
*@function:chartviewing
*@Author:keerthi
*@date:06/03/2021
*******************/ -->
<body>

 google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

<?php
    if($n->num_rows()>0)
    {
      foreach($n->result() as $row)
          {
    ?>
            
             





// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Target', 'District],
  ['District Target', <?php echo $row->distarget?>],
  ['Remaining Target', <?php echo $row->distargetrem?>]
  
]);


  <?php
        }
      }
      ?>

  // Optional; add a title and set the width and height of the chart
  var options = {'title':' PORTION COMPLETED', 'width':700, 'height':700};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

<?php
    if($n->num_rows()>0)
    {
      foreach($n->result() as $row)
          {
    ?>
            
             





// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['PHP', <?php echo $row->php?>],
  ['Laravel', <?php echo $row->laravel?>],
  ['IT', <?php echo $row->it?>],
  ['English', <?php echo $row->english?>],
  ['Python', <?php echo $row->python?>],
  ['java', <?php echo $row->java?>]
]);


  <?php
        }
      }
      ?>

  // Optional; add a title and set the width and height of the chart
  var options = {'title':' PORTION COMPLETED', 'width':700, 'height':700};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
</body>
</html>