<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<?php 
// $msgall=0;
// $msgpersonal=0;
$servername = "localhost";
$username = "DLakmal";
$password = "0412227518";
$dbname = "chat_reviews";

$conn = new mysqli($servername, $username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
    
    $sql ="SELECT count(*) as count FROM  messages";
    $result = $conn->query($sql);
   
    while($row = $result->fetch_assoc()) {
      $totalMsg =$row["count"];
    }

	$sql="SELECT trust, totalLess from evaluatehealth ORDER BY id DESC LIMIT 1";
	$result = $conn->query($sql);
	 
	 while($row = $result->fetch_assoc()) {
	    $trust=$row['trust'];
	    $totalless=$row['totalLess'];
	 }

     echo  $totalMsg;
     echo  $trust;
     echo  $totalless;
	?>
<div>
   <div class="row">
      
      <div class="col-sm-8 ">
         <div class="panel-header">
             <p>Evaluate Healthy</p>
             <h5 class="color-titdis">Lorem ipsum dolor sit amet, consectetur Lorem <b>Count</b> ipsum dolor sit amet, consectetur
             </h5>
         </div>        
         <div id="container-healthy" style="height: 450px; width:100%"></div>
     </div>
     <div class="col-sm-4 " style="border-left: 1px solid #ddd;padding-left: 0;">
         <div class="static-title"><i class="fa fa-edit"></i>&nbsp;General Statictics</div>
      </div>
   </div>	
    
</div>
<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th hidden="true">Total Messages</th>
            <th hidden="true">Healthy Messages</th>
             <th hidden="true">Other Messages</th>
        </tr>
    </thead>
    <tbody>
        <tr>
         

		   <th hidden="true">-</th>
            <td hidden="true"><?php echo $totalMsg  ?></td>
            <td hidden="true"><?php echo $trust  ?></td>
             <td hidden="true"><?php echo $totalMsg-$trust   ?></td>
        </tr>

    </tbody>
</table>
<script type="text/javascript">
     
// ---------------------------- start topic bar------------------------------
Highcharts.chart('container-healthy', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Count'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
// ----------------------------end--------------------------------------
</script>
