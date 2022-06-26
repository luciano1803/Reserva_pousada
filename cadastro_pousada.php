<?php
    include("conexao.php");

    $cpf=$_POST['cpf'];
    $nome=$_POST['nome'];
    $agencia=$_POST['agencia'];
    $suite=$_POST['suite'];
    $hospede=$_POST['hospede'];
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];
    $tipo=$_POST['tipo'];

    $sql="INSERT INTO pousada (cpf, nome,agencia, suite, hospede, check_in, check_out,tipo)
        VALUES ('$cpf','$nome','$agencia', '$suite', '$hospede','$check_in', '$check_out','$tipo')";
  if(mysqli_query($conexao,$sql)) {
       
        echo "<h1>Cliente cadastrado com sucesso</h1>";
        echo "<a href='cadastro_pousada.html'>Cadastrar novo Cliente?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>