<html>

    <head>
        <title>Lista Geral de medicos</title>
        <link rel="stylesheet" href="css/paginas.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <source>

    </source>

    </head>
<body> 



<?php

include 'conexao.php';

$result = $con->query("SELECT * FROM medicos ORDER BY NOME ASC"); 


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
                    <td><th scope="col">Nome Medico(a)</th></td>
                    <td><th scope="col">Idade</th></td>
                    <td><th scope="col">Especialidade</th></td>
                    <td><th scope="col">CPF</th></td>
                    <td><th scope="col">CIDADE</th></td>

                </tr>
            </thead>

            <tbody>

            <?php
                while ( $linha = $result->fetch_assoc() ) {
                   // print_r($linha);
                
            ?>


            <tr>
                <td> <?php echo $linha['CODM']; ?> </td>
                <td> <a href="medico.php?codd=<?= $linha['CODM']?>">
                    
                <td> <?php echo $linha['NOME']; ?> </td>
                <td> <a href="medico.php?coddi=<?= $linha['NOME']?>">

                <td> <?php echo $linha['IDADE']; ?> </td>
                <td> <a href="medico.php?coddisc=<?= $linha['IDADE']?>">

                <td> <?php echo $linha['ESPECIALIDADE']; ?> </td>
                <td> <a href="medico.php?nomedis=<?= $linha['ESPECIALIDADE']?>">

                <td> <?php echo $linha['CPF']; ?> </td>
                <td> <a href="medico.php?nasc=<?= $linha['CPF']?>">
                
                <td> <?php echo $linha['CIDADE']; ?> </td>
                <td> <a href="medico.php?end=<?= $linha['CIDADE']?>">


                


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