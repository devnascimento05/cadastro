<?php

        include 'conexao.php';

        $nome = $_POST["txtNome"];

        $result = $con->query("SELECT * FROM funcionarios WHERE NOME like '%$nome%' ORDER BY codf ASC");

    ?>

<p align="center">
        <table>
            <tr>
                <td>
                    <img src="img/clinica.jpg" width="840px" height="280px">
                </td>
            </tr>
        </table>
    </p>

<P align="center">

        <table class="table table-hover table-striped">
            <thead>
            <td><th scope="col">Código do Funcionario</th></td>
            <td><th scope="col">Nome do Funcionario(a)</th></td>
              
            </thead>
            <tbody>

            <?php
                while ( $linha = $result->fetch_assoc() ){
            ?>
                <tr>
                    <td><th> <?php echo $linha['CODF']; ?> </th></td>
                    <td><th> <?php echo $linha['NOME']; ?> </th></td>
                    
                </tr>

            <?php
                echo "<br>";
                echo "<p align='center'>Dados do Funcionario:</p>";
                echo "<br>";
                echo "<p align='center'><a href='index.html'>Volta</a></p>";
                echo "<br>";}
            ?>
            
            </tbody>
            
            
            
        </table>

    </p>



   
</body>

</html>