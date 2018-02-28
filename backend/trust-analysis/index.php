
<div class="row">
    <div class="col-sm-8">
        <div class="panel-header">
             <p>Review of the chat session</p>
             <h5 class="color-titdis">This statistics show you a chat session review by topics, emotions, personal informations and healthiness as  <b>100%</b>.</h5>
         </div>
        <div id="container-reviewGraph" style="height: 450px; width:100%"></div>
    </div>
     <div class="col-sm-4 padding-zero l-boder">
         <div class="panel-header">
             <p>Emotion Extracted</p>
         </div>
         <div id="container-emotion-trust" style="height: 300px; width:90%;margin-left:15px;"></div>
         <div class="panel-header">
             <p>Topic Discussed</p>
         </div>
         <div id="container-topic-trust" style="height: 300px; width:90%;margin-left:15px;"></div>
     </div>
</div>

 

<script type="text/javascript">
//----------------start trust worthiness graph----------------------------------
$(function () {
// $.getJSON('backend/emotion-extraction/EmotionController.php?function=getEmotionStatistics', function (data) {
$.getJSON('backend/trust-analysis/trust-analysis-controller.php?function=get_session_review', function (data) {
Highcharts.chart('container-reviewGraph', {
    chart: {
        type: 'column'
    },
    title: {
        text: ' '
    },
    subtitle: {
        text: ''
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
            text: 'Review Rate'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.1f}</b>'
    },
    series: [{
        name: 'Population',
        data: [
                    ['Positive Topics', parseFloat(data[0][0])],
                    ['Positive Emotions', parseFloat(data[0][1])],
                    ['Personal Informations', parseFloat(data[0][2])],
                    ['Healthiness', parseFloat(data[0][3])]
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
 $("#container-trustGraph").find("text:contains('Highcharts.com')").remove();
});
//-----------------end trust worthiness graph----------------------------------- 
// ---------------------topic graph trust---------------------------
 $(function () {
    $.getJSON('backend/topic-detection/TopicController.php?function=getTopicPercentage', function (data) {
    console.log(data); 
    Highcharts.chart('container-topic-trust', {
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
       
        });
// --------start emotion graph trust--------------------------------------------------------
$(function () {
$.getJSON('backend/emotion-extraction/EmotionController.php?function=getEmotionStatistics', function (data) {
Highcharts.chart('container-emotion-trust', {
    chart: {
        type: 'column'
    },
    title: {
        text: ' '
    },
    subtitle: {
        text: ''
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
        pointFormat: 'Emotion identified <b>{point.y:.1f} messages</b>'
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
// --------end emotion graph trust---------------------------------------------------------
</script>