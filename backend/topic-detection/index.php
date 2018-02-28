<?php
    include 'backend/include.php';
    $totalMsg=0;
    $noOfTopic=0; 
    $currentTopic='';
    
    $sql="SELECT count(*) as count FROM  messages";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    	$totalMsg =$row["count"];
    }

    $sql="SELECT count(*) as count FROM  topic where NOT percentage=0";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $noOfTopic =$row["count"];
    }

    $sql="SELECT name FROM topic WHERE topic_id = (SELECT topic_id FROM messages ORDER BY msg_id DESC LIMIT 1)";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      $currentTopic =$row["name"];
    }
?>
<div>
   <div class="row">
      
      <div class="col-sm-8 ">
         <div class="panel-header">
             <p>Topic Discussed</p>
             <h5 class="color-titdis">Lorem ipsum dolor sit amet, consectetur Lorem <b>100%</b> ipsum dolor sit amet, consectetur</h5>
         </div>        
         <div id="container-topicGraph" style="height: 450px; width:100%"></div>
     </div>
     <div class="col-sm-4 " style="border-left: 1px solid #ddd;padding-left: 0;">
         <div class="static-title"><i class="fa fa-edit"></i>&nbsp;General Statictics of topics</div>
         <ul class="topic-static-box">
           <li>Topic Changing Rate &nbsp;&nbsp;<a><?php echo $noOfTopic/($totalMsg*$totalMsg) ?></a></li>
           <li>Total Message Count &nbsp;&nbsp;<a><?php echo $totalMsg ?></a></li>
           <li>No Of topics idetified &nbsp;&nbsp;<a><?php echo $noOfTopic ?></a></li>
           <li>Current topic &nbsp;&nbsp;<a><?php echo $currentTopic ?></a></li>
         </ul>
         <!--<div class="row">
            <div id="container-topicChanging" style="height: 200px; width:100%"></div>
         </div> -->
         <div  class="row">
            <div id="container-topic-bar" style="height: 300px; width:90%;margin-left:15px;"></div>
         </div>
         
      </div>
   </div>	
    
</div>
<script type="text/javascript">
 
 $(function () {
    $.getJSON('backend/topic-detection/TopicController.php?function=getTopicPercentage', function (data) {
    console.log(data); 
	Highcharts.chart('container-topicGraph', {
		    chart: {
		        type: 'pie',
		        options3d: {
		            enabled: false,
		            alpha: 45,
		            beta: 0
		        }
		    },
		    title: {
		        text: ''
		    },
		    tooltip: {
		        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		    },
		    plotOptions: {
		        pie: {
		            allowPointSelect: true,
		            cursor: 'pointer',
		            depth: 35,
		            dataLabels: {
		                enabled: true,
		                format: '{point.name}'
		            }
		        }
		    },
		    series: [{
		        type: 'pie',
		        name: 'Browser share',
		         data: [ 
			              [data[0][0], parseFloat(data[0][1])],
				            [data[1][0], parseFloat(data[1][1])],
				            {
				                name: data[2][0],
				                y: parseFloat(data[2][1]),
				                sliced: true,
				                selected: true
				            },
				            [data[3][0], parseFloat(data[3][1])],
				            [data[4][0], parseFloat(data[4][1])],
				            [data[5][0], parseFloat(data[5][1])],
				            [data[6][0], parseFloat(data[6][1])]
		              ]
		    }]
		  });
		 });
          $("#container-topicGraph").find("text:contains('Highcharts.com')").remove();
		});
   
// ---------------------------- start topic bar------------------------------
$(function () {
$.getJSON('backend/topic-detection/TopicController.php?function=getTopicCount', function (data) {
Highcharts.chart('container-topic-bar', {
    chart: {
        type: 'column'
    },
    title: {
        text: ' '
    },
    subtitle: {
        text: ' '
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Message Count'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Topic identified <b>{point.y:.1f} messages</b>'
    },
    series: [{
        name: 'Population',
        data: [
                    [data[0][0], parseInt(data[0][1])],
                    [data[1][0], parseInt(data[1][1])],
                    [data[2][0], parseInt(data[2][1])],
                    [data[3][0], parseInt(data[3][1])],
                    [data[4][0], parseInt(data[4][1])],
                    [data[5][0], parseInt(data[5][1])],
                    [data[6][0], parseInt(data[6][1])]
            
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '12px',
                fontFamily: 'Source Sans Pro, Verdana, sans-serif'
            }
        }
    }]
  });
 });
 $("#container-topicGraph").find("text:contains('Highcharts.com')").remove();
});
// ----------------------------end--------------------------------------
</script>
