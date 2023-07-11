<!DOCTYPE html>
<html>
<head>
    <title>Graph </title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'type objectif');
            data.addColumn('number', 'nombre');
            data.addRows(<?php echo json_encode($graphData); ?>);

            var options = {
                title: 'Nombre Utilisateur pour chaque type d objectif ',
                
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 100%; height: 400px;"></div>
    <a href="admin">retour</a>
</body>
</html>
