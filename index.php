<html>
	<head>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
		<script type="text/javascript">

		google.load('visualization', '1.0', {'packages':['corechart','table']});

		google.setOnLoadCallback(drawChart());

		function drawChart(data) {
			var jsonPieData = $.ajax({
				url: "getPieData.php",
				data: "q="+data,
				dataType:"json",
				async: false
			}).responseText;

			var jsonTableData = $.ajax({
				url: "getTableData.php",
				data: "q="+data,
				dataType:"json",
				async: false
			}).responseText;

			var pieData = new google.visualization.DataTable(jsonPieData);
			var tableData = new google.visualization.DataTable(jsonTableData);

			var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
			chart.draw(pieData, {legend: {textStyle: {color: '#FFFFFF'}}, backgroundColor:"none", width: 600, height: 500, chartArea: {left:"5%", top:"5%", width:"90%", height:"90%"}});

			var table = new google.visualization.Table(document.getElementById('table_div'));
			table.draw(tableData, {width: 600, height: 500, showRowNumber: true, alternatingRowStyle: true, page: 'enable', pageSize: 20});
		}
		</script>
	</head>

	<body background="Elegant_Background-8.jpg" background-size="cover">
		<div id="header">
			<form>
				<select name="users" onchange="drawChart(this.value)">
					<option value="">Select an option:</option>
					<option value="sexo">Sexo</option>
					<option value="periodo">Periodo</option>
					<option value="estado_civil">Estado Civil</option>
					<option value="nivel_informatica">Nivel de Informatica</option>
				</select>
			</form>
		</div>
		<div id="main" style="background-color:#FF0000">
			<div id="chart_div" style="float:left"></div>
			<div id="table_div" style="float:right; filter: alpha(opacity=65);"></div>
		</div>
	</body>
</html>
