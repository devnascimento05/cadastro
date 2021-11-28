<?php

include 'conexao.php';

$codf = $_POST["txtcodF"];
$nome = $_POST["txtNome"];
$codid = $_POST["txt_idade"];
$cidade = $_POST["txtCid"];
$sala = $_POST["txt_sal"];
$cpf = $_POST["txt_cpf"];




$stms = $con->prepare("INSERT INTO funcionarios(CODF,NOME,IDADE,CIDADE,SALARIO,CPF) VALUES (?,?,?,?,?,?)");

$stms->bind_param('ssssss', $codf, $nome, $codid, $cidade, $sala, $cpf);

$stms->execute();

echo "Erro de sentença: %s.\n" . $stms->error;

$stms->close();


echo "<br>";
echo "<p align='center'>Inclusão efetuada com sucesso!!!</p>";
echo "<br>";
echo "<p align='center'><a href='index.html'>Volta</a></p>";
echo "<br>";

?>