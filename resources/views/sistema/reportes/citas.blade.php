@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
	<div id="container" style="width:100%; height:400px;"></div>
</div>
<script src="{{ asset('Highcharts/code/highcharts.js') }}"></script>
<script src="{{ asset('Highcharts/code/modules/series-label.js') }}"></script>
<script src="{{ asset('Highcharts/code/modules/exporting.js') }}"></script>
<script src="{{ asset('Highcharts/code/modules/export-data.js') }}"></script>

<script type="text/javascript">
	Highcharts.chart('container', {
	    chart: {
	        type: 'pie',
	        options3d: {
	            enabled: true,
	            alpha: 45,
	            beta: 0
	        }
	    },
	    title: {
	        text: 'Browser market shares at a specific website, 2014'
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
	            ['Firefox', 45.0],
	            ['IE', 26.8],
	            {
	                name: 'Chrome',
	                y: 12.8,
	                sliced: true,
	                selected: true
	            },
	            ['Safari', 8.5],
	            ['Opera', 6.2],
	            ['Others', 0.7]
	        ]
	    }]
	});
</script>
@stop