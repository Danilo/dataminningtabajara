<?php
	// $dbuser="root";
	// $dbname="data";
	// $dbpass="root";
	// $dbserver="localhost";

	$sql_query = "SELECT * FROM questionario";

	$con = pg_connect("host=ec2-54-204-43-200.compute-1.amazonaws.com port=5432 dbname=de48857s2icssf user=nwdejxuilsjcjz password=d5uuQd2byLFmaMym-qvR-SI7TI");

	if (!$con){ die ("Could not connect to server\n"); }
	$result = pg_query($con, $sql_query);

	echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"sexo\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Data de Cadastro\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

	$total_rows = pg_num_rows($result);

	$row_num = 0;
	while($row = pg_fetch_array($result)){
		$row_num++;
		if ($row_num == $total_rows){
			echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['sexo'] . "\",\"f\":null},{\"v\":\"" . $row['dataCadastro'] . "\",\"f\":null}]}";
		} else {
			echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['sexo'] . "\",\"f\":null},{\"v\":\"" . $row['dataCadastro'] . "\",\"f\":null}]}, ";
		}
	}
	echo " ] }";
	pg_close($con);
?>
