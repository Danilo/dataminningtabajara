<?php
	$q=$_GET["q"];
	// $dbuser="root";
	// $dbname="data";
	// $dbpass="root";
	// $dbserver="localhost";

	$con = pg_connect("host=ec2-54-204-43-200.compute-1.amazonaws.com port=5432 dbname=de48857s2icssf user=nwdejxuilsjcjz password=d5uuQd2byLFmaMym-qvR-SI7TI");

	if (!$con){ die ("Could not connect to server\n"); }

	// sexo
	if($q == "sexo"){
		$sql_query = "SELECT \"raAluno\", \"sexo\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Sexo\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['sexo'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['sexo'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// periodo
	if($q == "periodo"){
		$sql_query = "SELECT \"raAluno\", \"cursoPeriodo\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Periodo\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['cursoPeriodo'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['cursoPeriodo'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// estado_civil
	if($q == "estado_civil"){
		$sql_query = "SELECT \"raAluno\", \"estadoCivil\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Estado Civil\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['estadoCivil'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['estadoCivil'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// nivel_informatica
	if($q == "nivel_informatica"){
		$sql_query = "SELECT \"raAluno\", \"nvlInformatica\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Nivel de Informatica\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['nvlInformatica'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['nvlInformatica'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// tem_filhos
	if($q == "tem_filhos"){
		$sql_query = "SELECT \"raAluno\", \"temFilhos\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Filhos\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['temFilhos'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['temFilhos'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// locomocao
	if($q == "locomocao"){
		$sql_query = "SELECT \"raAluno\", \"locomocao\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Locomocao\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['locomocao'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['locomocao'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// reside_em_franca
	if($q == "reside_em_franca"){
		$sql_query = "SELECT \"raAluno\", \"municipio\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Municipio\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['municipio'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['municipio'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// deficiencia
	if($q == "deficiencia"){
		$sql_query = "SELECT \"raAluno\", \"deficiencia\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Deficiencia\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['deficiencia'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['deficiencia'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// deficiencia
	if($q == "domicilio"){
		$sql_query = "SELECT \"raAluno\", \"domicilio\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Domicilio\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['domicilio'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['domicilio'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// quantidade_de_operadoras
	if($q == "quantidade_de_operadoras"){
		$sql_query = "SELECT \"raAluno\", \"qtdOperadoras\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Quantidade de Operadoras\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['qtdOperadoras'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['qtdOperadoras'] . "\",\"f\":null}]}, ";
			}
		}
	}

	// faixa_etaria
	if($q == "faixa_etaria"){
		$sql_query = "SELECT \"id\", \"raAluno\", \"dataNascimento\" FROM questionario;";
		$result = pg_query($con, $sql_query);

		echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"RA Aluno\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Data de Nascimento\",\"pattern\":\"\",\"type\":\"string\"}], \"rows\": [ ";

		$total_rows = pg_num_rows($result);

		$row_num = 0;
		while($row = pg_fetch_array($result)){
			$row_num++;
			if ($row_num == $total_rows){
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['dataNascimento'] . "\",\"f\":null}]}";
			} else {
				echo "{\"c\":[{\"v\":\"" . $row['raAluno'] . "\",\"f\":null},{\"v\":\"" . $row['dataNascimento'] . "\",\"f\":null}]}, ";
			}
		}
	}

	echo " ] }";
	pg_close($con);
?>
