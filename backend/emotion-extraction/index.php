<?php
    include 'backend/include.php';
  
?>
<div>
   <div class="row">
      
      <div class="col-sm-8 ">
         <div class="panel-header">
             <p>Emotion Extracted</p>
             <h5 class="color-titdis">Lorem ipsum dolor sit amet, consectetur Lorem <b>Count</b> ipsum dolor sit amet, consectetur
             </h5>
         </div>        
         <div id="container-emotionGraph" style="height: 450px; width:100%"></div>
     </div>
     <div class="col-sm-4 " style="border-left: 1px solid #ddd;padding-left: 0;">
         <div class="static-title"><i class="fa fa-edit"></i>&nbsp;General Statictics of Emotions</div>
         <ul class="topic-static-box">
           <li>Emtion Changing Rate &nbsp;&nbsp;<a></a></li>
           <li>Total Message Count &nbsp;&nbsp;<a></a></li>
           <li>No Of emotion idetified &nbsp;&nbsp;<a></a></li>
           <li>Current Emotion &nbsp;&nbsp;<a></a></li>
         </ul>
       
         
      </div>
   </div>	
    
</div>
<script type="text/javascript">
     
// ---------------------------- start topic bar------------------------------
$(function () {
$.getJSON('backend/emotion-extraction/EmotionController.php?function=getEmotionStatistics', function (data) {
Highcharts.chart('container-emotionGraph', {
    chart: {
        type: 'column'
    },
    title: {
        text: ' '
    },
    subtitle: {
        text: 'Emotion'
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
        pointFormat: 'Emotions identified <b>{point.y:.1f}</b>'
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
