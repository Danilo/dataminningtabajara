<?php
	$q=$_GET["q"];
	$outros = 0;
	$invalido = 0;
	// $dbuser="nwdejxuilsjcjz";
	// $dbname="de48857s2icssf";
	// $dbpass="d5uuQd2byLFmaMym-qvR-SI7TI";
	// $dbserver="ec2-54-204-43-200.compute-1.amazonaws.com";

	$sql_query = "SELECT * FROM questionario";

	$con = pg_connect("host=ec2-54-204-43-200.compute-1.amazonaws.com port=5432 dbname=de48857s2icssf user=nwdejxuilsjcjz password=d5uuQd2byLFmaMym-qvR-SI7TI");

	if (!$con){ die ("Could not connect to server\n"); }
	$result = pg_query($con, $sql_query);

	echo "{\"cols\": [{\"id\":\"\",\"label\":\"Topping\",\"pattern\":\"\",\"type\":\"string\"},{\"id\":\"\",\"label\":\"Slices\",\"pattern\":\"\",\"type\":\"number\"}],\"rows\": [ ";

	$total_rows = pg_num_rows($result);

	// sexo
	if($q == "sexo"){
		while($row = pg_fetch_array($result)){
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
		while($row = pg_fetch_array($result)){
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
		while($row = pg_fetch_array($result)){
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
		while($row = pg_fetch_array($result)){
			$nivel_informatica++;

			if($row['nvlInformatica'] == "basico"){
				$basico++;
			} elseif($row['nvlInformatica'] == "intermediario"){
				$intermediario++;
			} elseif($row['nvlInformatica'] == "avancado"){
				$avancado++;
			} else {
				$outros++;
			}
		}
		echo "{\"c\":[{\"v\":\"Basico\",\"f\":null},{\"v\":" . $basico . ",\"f\":null}]},{\"c\":[{\"v\":\"Intermediario\",\"f\":null},{\"v\":" . $intermediario . ",\"f\":null}]},{\"c\":[{\"v\":\"Avancado\",\"f\":null},{\"v\":" . $avancado . ",\"f\":null}]},{\"c\":[{\"v\":\"Outros\",\"f\":null},{\"v\":" . $outros . ",\"f\":null}]}";
	}

	// tem_filhos
	if($q == "tem_filhos"){
		while($row = pg_fetch_array($result)){
			$tem_filhos++;

			if($row['temFilhos'] == "sim"){
				$sim++;
			} else {
				$nao++;
			}
		}
		echo "{\"c\":[{\"v\":\"Sim\",\"f\":null},{\"v\":" . $sim . ",\"f\":null}]},{\"c\":[{\"v\":\"Nao\",\"f\":null},{\"v\":" . $nao . ",\"f\":null}]}";
	}

	// locomocao
	if($q == "locomocao"){
		while($row = pg_fetch_array($result)){
			$locomocao++;

			if($row['locomocao'] == "proprio"){
				$proprio++;
			} elseif($row['locomocao'] == "semconducao"){
				$semconducao++;
			} elseif($row['locomocao'] == "coletivo"){
				$coletivo++;
			} elseif($row['locomocao'] == "terceiros"){
				$terceiros++;
			} else {
				$outros++;
			}
		}
		echo "{\"c\":[{\"v\":\"Proprio\",\"f\":null},{\"v\":" . $proprio . ",\"f\":null}]},{\"c\":[{\"v\":\"Sem Conducao\",\"f\":null},{\"v\":" . $semconducao . ",\"f\":null}]},{\"c\":[{\"v\":\"Coletivo\",\"f\":null},{\"v\":" . $coletivo . ",\"f\":null}]},{\"c\":[{\"v\":\"Terceiros\",\"f\":null},{\"v\":" . $terceiros . ",\"f\":null}]},{\"c\":[{\"v\":\"Outros\",\"f\":null},{\"v\":" . $outros . ",\"f\":null}]}";
	}

	// reside_em_franca
	if($q == "reside_em_franca"){
		while($row = pg_fetch_array($result)){
			$reside_em_franca++;

			if($row['municipio'] == "franca"){
				$franca++;
			} else {
				$outros++;
			}
		}
		echo "{\"c\":[{\"v\":\"Sim\",\"f\":null},{\"v\":" . $franca . ",\"f\":null}]},{\"c\":[{\"v\":\"Nao\",\"f\":null},{\"v\":" . $outros . ",\"f\":null}]}";
	}

	// reside_em_franca
	if($q == "deficiencia"){
		while($row = pg_fetch_array($result)){
			$deficiencia++;

			if($row['deficiencia'] == "nenhuma"){
				$nenhuma++;
			} else {
				$outros++;
			}
		}
		echo "{\"c\":[{\"v\":\"Nenhuma\",\"f\":null},{\"v\":" . $nenhuma . ",\"f\":null}]},{\"c\":[{\"v\":\"Alguma\",\"f\":null},{\"v\":" . $outros . ",\"f\":null}]}";
	}

	// domicilio
	if($q == "domicilio"){
		while($row = pg_fetch_array($result)){
			$domicilio++;

			if($row['domicilio'] == "proprio"){
				$proprio++;
			} elseif($row['domicilio'] == "alugado"){
				$alugado++;
			} elseif($row['domicilio'] == "cedido"){
				$cedido++;
			} elseif($row['domicilio'] == "financiado"){
				$financiado++;
			} else {
				$outros++;
			}
		}
		echo "{\"c\":[{\"v\":\"Proprio\",\"f\":null},{\"v\":" . $proprio . ",\"f\":null}]},{\"c\":[{\"v\":\"Alugado\",\"f\":null},{\"v\":" . $alugado . ",\"f\":null}]},{\"c\":[{\"v\":\"Financiado\",\"f\":null},{\"v\":" . $financiado . ",\"f\":null}]},{\"c\":[{\"v\":\"Outros\",\"f\":null},{\"v\":" . $outros . ",\"f\":null}]}";
	}

	// quantidade_de_operadoras
	if($q == "quantidade_de_operadoras"){
		while($row = pg_fetch_array($result)){
			$domicilio++;

			if($row['qtdOperadoras'] == 0){
				$zero++;
			} elseif($row['qtdOperadoras'] == 1){
				$um++;
			} elseif($row['qtdOperadoras'] == 2){
				$dois++;
			} elseif($row['qtdOperadoras'] >= 3){
				$tres_ou_mais++;
			} else {
				$invalido++;
			}
		}
		echo "{\"c\":[{\"v\":\"Zero\",\"f\":null},{\"v\":" . $zero . ",\"f\":null}]},{\"c\":[{\"v\":\"Um\",\"f\":null},{\"v\":" . $um . ",\"f\":null}]},{\"c\":[{\"v\":\"Dois\",\"f\":null},{\"v\":" . $dois . ",\"f\":null}]},{\"c\":[{\"v\":\"Tres ou mais\",\"f\":null},{\"v\":" . $tres_ou_mais . ",\"f\":null}]},{\"c\":[{\"v\":\"Dados invalidos\",\"f\":null},{\"v\":" . $invalido . ",\"f\":null}]}";
	}

	// faixa_etaria
	if($q == "faixa_etaria"){
		$invalido = 0;

		while($row = pg_fetch_array($result)){
			$faixa_etaria++;

			$id = $row['id'];
			$hoje = date("Y-m-d");
			$data_nasc = $row['dataNascimento'];
			$idade = $hoje - $data_nasc;

			if($idade <= 20){

				if($idade >= 16 && $idade <= 20){
					$ate_vinte_anos++;
				} else {
					$invalido++;
				}
			} elseif($idade >= 21 && $idade < 30){
				$ate_trinta_anos++;
			} elseif($idade >= 31 && $idade < 40){
				$ate_quarenta_anos++;
			} elseif($idade >= 41 && $idade < 100){
				$ate_acima_de_quarenta_anos++;
			} else {
				$invalido++;
			}
		}
		echo "{\"c\":[{\"v\":\" Ate 20 anos \",\"f\":null},{\"v\":" . $ate_vinte_anos . ",\"f\":null}]},{\"c\":[{\"v\":\"De 21 a 30 anos\",\"f\":null},{\"v\":" . $ate_trinta_anos . ",\"f\":null}]},{\"c\":[{\"v\":\"De 31 a 40 anos\",\"f\":null},{\"v\":" . $ate_quarenta_anos . ",\"f\":null}]},{\"c\":[{\"v\":\"Acima de 40 anos\",\"f\":null},{\"v\":" . $ate_acima_de_quarenta_anos . ",\"f\":null}]},{\"c\":[{\"v\":\"Dados invalidos\",\"f\":null},{\"v\":" . $invalido . ",\"f\":null}]}";
	}

	echo " ] }";
	pg_close($con);
?>
