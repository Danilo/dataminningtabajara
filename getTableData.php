<?php
	$dbuser="root";
	$dbname="data";
	$dbpass="root";
	$dbserver="localhost";

	$sql_query = "SELECT * FROM questionario";

	$con = mysql_connect($dbserver, $dbuser,$dbpass);

	if (!$con){ die('Could not connect: ' . mysql_error()); }
	mysql_select_db($dbname, $con);
	$result = mysql_query($sql_query);

	echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"sexo\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Data de Cadastro\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

	$total_rows = mysql_num_rows($result);
	$row_num = 0;
	while($row = mysql_fetch_array($result)){
		$row_num++;
		if ($row_num == $total_rows){
			echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['sexo'] . "\",\"f\":null},{\"v\":\"" . $row['dataCadastro'] . "\",\"f\":null}]}";
		} else {
			echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['sexo'] . "\",\"f\":null},{\"v\":\"" . $row['dataCadastro'] . "\",\"f\":null}]}, ";
		}
	}
	echo " ] }";
	mysql_close($con);
?>
