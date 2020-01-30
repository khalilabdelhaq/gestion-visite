@extends('layouts.app')
@section('content')
<script type="text/javascript">
    window.onload = function() {
    
    var options = {
        exportEnabled: true,
        animationEnabled: true,
        title:{
            text: "Dossiers"
        },
        legend:{
            horizontalAlign: "right",
            verticalAlign: "center"
        },
        data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "<b>{name}</b>: ${y} (#percent%)",
            indexLabel: "{name}",
            legendText: "{name} (#percent%)",
            indexLabelPlacement: "inside",
            dataPoints: [
                { y: 2, name: "En cours" },
                { y: 4, name: "Cloturé" },
                { y: 4, name: "Bloqué" },
             
            ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);

    var optionsGraphe = {
	animationEnabled: true,
	title: {
		text: "Dossier par division"
	},
	axisY: {
		title: "Nombre de dossiers",
		suffix: "",
		includeZero: false
	},
	axisX: {
		title: "Divisions"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "DAS", y: 10.09 },	
			{ label: "DAEC", y: 9.40 },	
			{ label: "DAR", y: 8.50 },
			{ label: "DUE", y: 7.96 },	
			{ label: "DTE", y: 7.80 },
			{ label: "DCL", y: 7.56 },			
			
		]
	}]
};
$("#GrapheContainer").CanvasJSChart(optionsGraphe);
    
    }
    </script>            
            <div id="chartContainer" style="height: 370px; width: 40%;display: inline-block;"></div>
           
            <div id="GrapheContainer" style="height: 370px; width: 40%;display: inline-block;"></div>
     
      <!-- end div content -->
@endsection