<?php

include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM pousada WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_pousada=mysqli_query($conexao, $resultado);

    while($rows_pousada=mysqli_fetch_array($resultado_pousada)){
        echo "Nome: ".$rows_pousada['nome']."<br>";
        echo "CPF: ".$rows_pousada['cpf']."<br>";
        echo "Agencia: ".$rows_pousada['agencia']."<br>";
        echo "Suite: ".$rows_pousada['suite']."<br>";
        echo "Hospede: ".$rows_pousada['hospede']."<br>";
        echo "Check-in: ".$rows_pousada['check_in']."<br>";
        echo "Check-out: ".$rows_pousada['check_out']."<br>";
         echo "tipo: ".$rows_pousada['tipo']."<br>";
        echo "<br>";
    }

?>