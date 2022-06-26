<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Clientes cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
     <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
</head>
<body>
    <?php 
        include("conexao.php");
        
        $sql="SELECT * FROM pousada";
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){
            echo "<table class='table'>
                  <tr>
                  <th>CPF</th>
                  <th>Nome</th>
                  <th>Agencia</th>
                  <th>Suite</th>
                  <th>Hospede</th>
                  <th>Check-in</th>
                  <th>Check-out</th>
                  <th>tipo</th></tr>";
            while($row=mysqli_fetch_assoc($resultado)){
                echo "<tr><td>".$row['cpf']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['agencia']."</td>";
                echo "<td>".$row['suite']."</td>";
                echo "<td>".$row['hospede']."</td>";
                echo "<td>".$row['check_in']."</td>";
                echo "<td>".$row['check_out']."</td>";
                echo "<td>".$row['tipo']."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "Zero Resultado";
        }
        mysqli_close($conexao);
    ?>
</body>
</html>