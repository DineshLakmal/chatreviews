
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
 Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Evaluate Healthy of Particular Chat'
    },
    subtitle: {
         },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [{
        name: 'Total Messages',
        colorByPoint: true,
        data: [{
            name: 'Total Messages',
            y: 56.33,
            drilldown: 'Total Messages'
        }, {
            name: 'Health messages',
            y: 24.03,
            drilldown: 'Health messages'
        }, {
            name: 'Other Messages',
            y: 10.38,
            drilldown: 'Other Messages'
        },   ]
    }],
    drilldown: {
        series: [{
            name: 'Health messages',
            id: 'Health messages',
            data: [
                [
                    'v11.0',
                    24.13
                ],
                [
                    'v8.0',
                    17.2
                ],
                [
                    'v9.0',
                    8.11
                ],
                [
                    'v10.0',
                    5.33
                ],
                [
                    'v6.0',
                    1.06
                ],
                [
                    'v7.0',
                    0.5
                ]
            ]
        }, {
           
        }, {
           
        }, {
            
        }, {
            
        }]
    }
});
 
 
 
 
</script>