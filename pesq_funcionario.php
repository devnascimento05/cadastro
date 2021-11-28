<html>

    <head>
        <title>Lista Geral de funcionarios</title>
        <link rel="stylesheet" href="css/paginas.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <source>

    </source>

    </head>
<body> 



<?php

include 'conexao.php';

$result = $con->query("SELECT * FROM funcionarios ORDER BY NOME ASC"); 


?>
  <p align="center">
        <table>
            <tr>
                <td>
                    <img src="img/clin.jpg" width="740px" height="180px">
                </td>
            </tr>
        </table>
    </p>

    <p>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                <th scope="col">Código</th>
                    <td><th scope="col">Nome Funcionario(a)</th></td>
                    <td><th scope="col">Idade</th></td>
                    <td><th scope="col">Cidade</th></td>
                    <td><th scope="col">Salario</th></td>
                    <td><th scope="col">CPF</th></td>

                </tr>
            </thead>

            <tbody>

            <?php
                while ( $linha = $result->fetch_assoc() ) {
                   // print_r($linha);
                
            ?>


            <tr>
                <td> <?php echo $linha['CODF']; ?> </td>
                <td> <a href="funcionarios.php?codp=<?= $linha['CODF']?>">
                    
                <td> <?php echo $linha['NOME']; ?> </td>
                <td> <a href="funcionarios.php?nome=<?= $linha['NOME']?>">

                <td> <?php echo $linha['IDADE']; ?> </td>
                <td> <a href="funcionarios.php?codid=<?= $linha['IDADE']?>">

                <td> <?php echo $linha['CIDADE']; ?> </td>
                <td> <a href="funcionarios.php?cidade=<?= $linha['CIDADE']?>">

                <td> <?php echo $linha['SALARIO']; ?> </td>
                <td> <a href="funcionarios.php?sala=<?= $linha['SALARIO']?>">
                
                <td> <?php echo $linha['CPF']; ?> </td>
                <td> <a href="funcionarios.php?cpf=<?= $linha['CPF']?>">


                


                    </a>
                </td>
            </tr>

            <?php
                  }
            ?>

            </tbody>


        </table> 
         <?php
                echo "<br>";
                echo "<p align='center'><a href='index.html'>Volta Tela Inicial</a></p>";
                echo "<br>";
            ?>
    </p>



</body>

</html>