<?php
	$q=$_GET["q"];
	$dbuser="root";
	$dbname="data";
	$dbpass="root";
	$dbserver="localhost";

	$sql_query = "SELECT * FROM questionario";

	$con = mysql_connect($dbserver, $dbuser,$dbpass);

	if (!$con){ die('Could not connect: ' . mysql_error()); }
	mysql_select_db($dbname, $con);
	$result = mysql_query($sql_query);

	echo "{\"cols\": [{\"id\":\"\",\"label\":\"Topping\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Slices\",\"pattern\":\"\",\"type\":\"number\"}],\"rows\": [ ";

	$total_rows = mysql_num_rows($result);

	// sexo
	if($q == "sexo"){
		while($row = mysql_fetch_array($result)){
			$sexo_total++;

			if($row['sexo'] == "masculino"){
				$sexo_masc++;
			} else {
				$sexo_fem++;
			}
		}
		echo "{\"c\":[{\"v\":\"Feminino\",\"f\":null},{\"v\":" . $sexo_fem . ",\"f\":null}]},{\"c\":[{\"v\":\"Masculino\",\"f\":null},{\"v\":" . $sexo_masc . ",\"f\":null}]}";
	}

	// periodo
	if($q == "periodo"){
		while($row = mysql_fetch_array($result)){
			$periodo++;

			if($row['cursoPeriodo'] == "noturno"){
				$noturno++;
			} else {
				$diurno++;
			}
		}
		echo "{\"c\":[{\"v\":\"Noturno\",\"f\":null},{\"v\":" . $noturno . ",\"f\":null}]},{\"c\":[{\"v\":\"Diurno\",\"f\":null},{\"v\":" . $diurno . ",\"f\":null}]}";
	}

	// estado_civil
	if($q == "estado_civil"){
		while($row = mysql_fetch_array($result)){
			$estado_civil++;

			if($row['estadoCivil'] == "solteiro"){
				$solteiro++;
			} elseif($row['estadoCivil'] == "casado"){
				$casado++;
			} else {
				$outros++;
			}
		}
		echo "{\"c\":[{\"v\":\"Solteiros\",\"f\":null},{\"v\":" . $solteiro . ",\"f\":null}]},{\"c\":[{\"v\":\"Casados\",\"f\":null},{\"v\":" . $casado . ",\"f\":null}]},{\"c\":[{\"v\":\"Outros\",\"f\":null},{\"v\":" . $outros . ",\"f\":null}]}";
	}

	// nivel_informatica
	if($q == "nivel_informatica"){
		while($row = mysql_fetch_array($result)){
			$estado_civil++;

			if($row['nvlInformatica'] == "basico"){
				$basico++;
			} elseif($row['nvlInformatica'] == "intermediario"){
				$intermediario++;
			} elseif($row['nvlInformatica'] == "avancado"){
				$avancado++;
			}
		}
		echo "{\"c\":[{\"v\":\"Basico\",\"f\":null},{\"v\":" . $basico . ",\"f\":null}]},{\"c\":[{\"v\":\"Intermediario\",\"f\":null},{\"v\":" . $intermediario . ",\"f\":null}]},{\"c\":[{\"v\":\"Avancado\",\"f\":null},{\"v\":" . $avancado . ",\"f\":null}]}";
	}
	echo " ] }";
	mysql_close($con);
?>
