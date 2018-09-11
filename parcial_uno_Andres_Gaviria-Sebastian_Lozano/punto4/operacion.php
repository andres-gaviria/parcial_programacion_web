<?php

	$respuesta;
	if($_POST["dato"] == "punto_a"){
	$respuesta = ($_POST["a"] * $_POST["d"]) + ($_POST["b"] *$_POST["c"]) / ($_POST["b"] * $_POST["d"]);
	echo ("El resultado es: $respuesta");
	}

	elseif($_POST["dato"] == "punto_b"){
	$respuesta = ($_POST["a"] * $_POST["d"]) - ($_POST["b"] *$_POST["c"])  ($_POST["b"] * $_POST["d"]);
	echo ("El resultado es: $respuesta");	
	}

	elseif($_POST["dato"] == "punto_c"){
	$respuesta = ($_POST["a"] * $_POST["c"] / $_POST["b"] * $_POST["d"]);
	echo ("El resultado es: $respuesta");	
	}

	elseif($_POST["dato"] == "punto_d"){
	$respuesta = ($_POST["a"] * $_POST["d"]) / ($_POST["b"] * $_POST["c"]);
	echo ("El resultado es: $respuesta");
	}

	elseif($_POST["dato"] == "punto_f"){
	$respuesta = ($_POST["a"] * $_POST["n"]) / ($_POST["b"] * $_POST["n"]);
	echo ("El resultado es: $respuesta");
	}


	
