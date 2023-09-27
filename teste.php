<?php

   
    $host = "host";		         // host = localhost because database hosted on the same server where PHP files are hosted
    $dbname = "dbname";              // Database name
    $username = "username";		// Database username
    $password = "password";	        // Database password


	// Establish connection to MySQL database
	$conn = new mysqli($host, $username, $password, $dbname);


	// Check if connection established successfully
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	//else { echo "Connected to mysql database. <br>"; }


    $Linha_fabrica    =   $_GET['linha'];

    //$sql        =   "SELECT device_status FROM devices_status WHERE device_name='$device_name' LIMIT 1";
	
	//$sql = "SELECT Id, Identificacao_da_Linha, Data, Nome_do_cliente, Codigo_do_Produto, Nome_do_produto, Lote FROM tb_de_linha_de_producao ORDER BY Id DESC Limit 1";
	
	if (number_format($Linha_fabrica, 0)<=9)  {
		
		$sql = "SELECT Id AS Controle, Identificacao_da_Linha AS Linha, date_format(Data, '%d/%m/%Y') as Data, Atividade, Nome_do_cliente AS Cliente, Codigo_do_produto AS Codigo, Nome_do_produto AS Produto, Lote FROM tb_de_linha_de_producao WHERE (Identificacao_da_Linha = 'Linha 0".$Linha_fabrica."') order by id desc limit 1";	
		
	}
	
	else {
		
		$sql = "SELECT Id AS Controle, Identificacao_da_Linha AS Linha, date_format(Data, '%d/%m/%Y') as Data, Atividade, Nome_do_cliente AS Cliente, Codigo_do_produto AS Codigo, Nome_do_produto AS Produto, Lote FROM tb_de_linha_de_producao WHERE (Identificacao_da_Linha = 'Linha ".$Linha_fabrica."') order by id desc limit 1";	
		
	}
    
	$result     =   $conn->query($sql);
    

    if ($result->num_rows > 0) {
    
	
    while ($row = $result->fetch_assoc())
    {
		
		//echo "<div id='borda'> <br>";
		echo "<div id='borda'>";
		//echo "<style> #borda{border: 6px solid #000} </style>";
		//echo "<style> #borda{border: 1px solid #000;Background-color: #009900;}  </style>;
		//echo "<style> #borda{border: 4mm ridge rgba(211, 220, 50, .6); Background-color:#F5DEB3; border-radius: 40px; width: 1280px; height: 720px; margin-left: 15px; margin-top: 0px; margin-right: 0px;margin-bottom: 0px; </style>";

		echo "<style> #borda{border: 4mm ridge rgba(211, 220, 50, .6); border-radius: 40px; width: 1280px; height: 720px; margin-left: 0px; margin-top: 0px; margin-right: 0px;margin-bottom: 0px; </style>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controle: ".$row['Controle']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linha de Fabricação: ".$row['Linha']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data da Atividade: ".$row['Data']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atividade: ".$row['Atividade']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cliente: ".$row['Cliente']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Código: ".$row['Codigo']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nome do Produto: ".$row['Produto']."</p></strong>";
		echo "<strong><p style=color:DodgerBlue;font-size:40px;font-family:arial;> </style> "."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lote Nº: ".$row['Lote']."</p></strong>";
    }
        
    } else {
        echo "Error:" . $sql . "<br> </div>" . $conn->error;
    }
    
	
    $conn->close();
?>