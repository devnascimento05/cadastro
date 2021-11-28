<?php

include 'conexao.php';

$codp = $_POST["txt_cp"];
$nome = $_POST["txt_nome"];
$codid = $_POST["txt_idade"];
$cidade = $_POST["txt_cidade"];
$cpf = $_POST["txt_cpf"];
$doen = $_POST["txt_doen"];




$stms = $con->prepare("INSERT INTO pacientes(CODP,NOME,IDADE,CIDADE,CPF,DOENCA) VALUES (?,?,?,?,?,?)");

$stms->bind_param('ssssss', $codp, $nome, $codid, $cidade, $cpf, $doen);

$stms->execute();

echo "Erro de sentença: %s.\n" . $stms->error;

$stms->close();


echo "<br>";
echo "<p align='center'>Inclusão efetuada com sucesso!!!</p>";
echo "<br>";
echo "<p align='center'><a href='index.html'>Volta</a></p>";
echo "<br>";

?>