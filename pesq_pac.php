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

$result = $con->query("SELECT * FROM pacientes ORDER BY NOME ASC"); 


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
                    <td><th scope="col">Nome Paciente</th></td>
                    <td><th scope="col">Idade</th></td>
                    <td><th scope="col">Cidade</th></td>
                    <td><th scope="col">CPF</th></td>
                    <td><th scope="col">Doenca</th></td>

                </tr>
            </thead>

            <tbody>

            <?php
                while ( $linha = $result->fetch_assoc() ) {
                   // print_r($linha);
                
            ?>


            <tr>
                <td> <?php echo $linha['CODP']; ?> </td>
                <td> <a href="pacientes.php?codp=<?= $linha['CODF']?>">
                    
                <td> <?php echo $linha['NOME']; ?> </td>
                <td> <a href="pacientes.php?nome=<?= $linha['NOME']?>">

                <td> <?php echo $linha['IDADE']; ?> </td>
                <td> <a href="pacientes.php?codid=<?= $linha['IDADE']?>">

                <td> <?php echo $linha['CIDADE']; ?> </td>
                <td> <a href="pacientes.php?cidade=<?= $linha['CIDADE']?>">

                <td> <?php echo $linha['CPF']; ?> </td>
                <td> <a href="pacientes.php?cpf=<?= $linha['CPF']?>">
                
                <td> <?php echo $linha['DOENCA']; ?> </td>
                <td> <a href="pacientes.php?doen=<?= $linha['DOENCA']?>">


                


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