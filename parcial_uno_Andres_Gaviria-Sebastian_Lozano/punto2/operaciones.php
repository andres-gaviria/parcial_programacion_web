<?php 
	
		if ($_POST["dato1"] == "terabyte" and $_POST["dato2"] == "gigabyte")  {
			echo ($resultado = $_POST ["n1"] * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		} elseif ($_POST["dato1"] == "terabyte" and $_POST["dato2"] == "megabyte")  {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		} elseif ($_POST["dato1"] == "terabyte" and $_POST["dato2"] == "kilobyte") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		} elseif ($_POST["dato1"] == "terabyte" and $_POST["dato2"] == "byte") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "terabyte" and $_POST["dato2"] == "bit") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 * 1024 * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');

		}elseif ($_POST["dato1"] == "gigabyte" and $_POST["dato2"] == "terabyte") {
			echo ($resultado = $_POST ["n1"] / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "gigabyte" and $_POST["dato2"] == "megabyte") {
			echo ($resultado = $_POST ["n1"] * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "gigabyte" and $_POST["dato2"] == "kilobyte") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "gigabyte" and $_POST["dato2"] == "byte") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "gigabyte" and $_POST["dato2"] == "bit") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		

		}elseif ($_POST["dato1"] == "megabyte" and $_POST["dato2"] == "terabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "megabyte" and $_POST["dato2"] == "gigabyte") {
			echo ($resultado = $_POST ["n1"] / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "megabyte" and $_POST["dato2"] == "kilobyte") {
			echo ($resultado = $_POST ["n1"] * 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "megabyte" and $_POST["dato2"] == "byte") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "megabyte" and $_POST["dato2"] == "bit") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024 * 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}

		elseif ($_POST["dato1"] == "kilobyte" and $_POST["dato2"] == "terabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "kilobyte" and $_POST["dato2"] == "gigabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "kilobyte" and $_POST["dato2"] == "megabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "kilobyte" and $_POST["dato2"] == "byte") {
			echo ($resultado = $_POST ["n1"] * 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "kilobyte" and $_POST["dato2"] == "bit") {
			echo ($resultado = $_POST ["n1"] * 1024 * 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}

		elseif ($_POST["dato1"] == "byte" and $_POST["dato2"] == "terabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024 / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "byte" and $_POST["dato2"] == "gigabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "byte" and $_POST["dato2"] == "megabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "byte" and $_POST["dato2"] == "kilobyte") {
			echo ($resultado = $_POST ["n1"] / 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "byte" and $_POST["dato2"] == "bit") {
			echo ($resultado = $_POST ["n1"] * 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}

		elseif ($_POST["dato1"] == "bit" and $_POST["dato2"] == "terabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024 / 1024 / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "bit" and $_POST["dato2"] == "gigabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024 / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "bit" and $_POST["dato2"] == "megabyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "bit" and $_POST["dato2"] == "kilobyte") {
			echo ($resultado = $_POST ["n1"] / 1024 / 1024);
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}elseif ($_POST["dato1"] == "bit" and $_POST["dato2"] == "byte") {
			echo ($resultado = $_POST ["n1"] / 1024 );
			echo ('<br><a href="convertidor.php">Regresar</a>');
		}

		else {
		echo("Faltan datos");
		echo ('<br><a href="calculadora.php">Regresar</a>');
	
}
?>