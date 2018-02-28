  <?php 
    $msgall=0;
	$msgpersonal=0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat_reviews";

$conn = new mysqli($servername, $username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}


	$sql="SELECT * FROM  personal_info";
	 $result = $conn->query($sql);
	 while($row = $result->fetch_assoc()) {
		$msgall=$row['msgcount'];
	    $msgpersonal=$row['infocount'];
	 }
	?>
<div id="container-personalGraph" style="height: 400px; width:100%">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 210px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th hidden="true">Messages</th>
            <th hidden="true">Personal Information</th>
        </tr>
    </thead>
    <tbody>
        <tr>
         

		   <th hidden="true">-</th>
            <td hidden="true"><?php echo $msgall  ?></td>
            <td hidden="true"><?php echo $msgpersonal  ?></td>
        </tr>

    </tbody>
</table>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Personal Info Share'
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
   </script>
</div>